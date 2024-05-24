<?php

namespace App\Http\Controllers;

use App\Models\Feed;

use App\Models\Order;

use App\Models\Seller;
use Stripe\StripeClient;

use App\Models\OrderItems;
use App\Models\StripeToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Country;
use Illuminate\Support\Facades\Session;

use App\Models\EmailConfig;
use App\Mail\Email; 
use Illuminate\Support\Facades\Mail;


class StripeController extends Controller
{
    protected StripeClient $StripeClient;

	public function __construct()
	{
		$stripeKey = config('services.stripe.key');
        $stripeSecret = config('services.stripe.secret');

        $this->StripeClient = new StripeClient([
            'api_key' => $stripeSecret,
        ]);
		
	}
    //
    public function fetchPaymentIntent(Order $order)
	{
		// dd($order);
		$paymentIntent = $order->paymentIntent;
		// if($paymentIntent)
		// 	$paymentIntent->delete();
		$order->fresh();

		if (!$order->paymentIntent) {
			
			$orderTotal = currencyCalculator($order->total_cost,'USD',null,false);
			$transferGroup = 'order_' . $order->id;

			$paymentIntent = $this->StripeClient->paymentIntents->create([
				'amount' => self::stripeFormat($orderTotal),
				'currency' => strtolower(getUserCurrency()),
				'payment_method_types' => ['card'],
				'transfer_group' => "$transferGroup",
			]);
		// dd($paymentIntent);

			//save payments history in our table
			$order->savePaymentIntent($paymentIntent->client_secret, $paymentIntent->id, $transferGroup);
			$output = [
				'clientSecret' => $paymentIntent->client_secret,
			];
		} else {
			$output = [
				'clientSecret' => $paymentIntent->client_secret,
			];
		}
		return response()->json($output);
	}
	





	public function connectStripe($token)
	{
		$stripeToken = stripeToken::where('token', $token)->first();
		$seller = $stripeToken->seller;

		$seller->update([
			'stripe_onboarded' => true,
		]);

		return redirect()->route('seller.dashboard');
	}



	public function pay(Order $order)
	{
		return view('pages.pay', ['order_id' => $order->id, 'order' => $order]);
	}

	
	public function paymentSuccess(Order $order)
	{

	
		$order->update([
			'status' => 'paid',
			'method' => 'stripe',
		]);
		// $order items quantity update
		foreach ($order->orderItems as $orderItem) {
			$orderItem->product->update([
				'quantity' => $orderItem->product->quantity - $orderItem->product_quantity,
			]);
		}
		Session::forget('cart');
		Session::forget('totalProductCost');
		Session::forget('totalShippingCost');
		Session::forget('totalCost');
		// mail
		$email = EmailConfig::where('template_for', 'product purchased')->first();
		$orderItemDetails = "";
		foreach ($order->orderItems as $orderItem) {
			$options = \App\Models\VariantOption::whereIn('id', json_decode($orderItem->product_variant_option_ids, true))->get();
		
			$orderItemDetails .= "<tr>
				<td>{$orderItem->product->title}<br>";
		
			foreach ($options as $option) {
				$orderItemDetails .= "<?php echo \"<p class='mb-0 mt-1'><strong>{$option->variant->name}:</strong> <span class='font-medium'>{$option->name}</span></p>\"";
			}
			$orderItemDetails .= "</td>";
		
			$orderItemDetails .= "<td>{$orderItem->product_quantity}</td>
				<td>".currencyCalculator($orderItem->product_cost)."</td>
			</tr>";
		}
		
		
		$orderDetails = "<table style='border-collapse: collapse; width: 100%; margin-top=15px; margin-bottom=15px'>
			<thead>
				<tr>
					<th style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>Product ID</th>
					<th style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>Product Quantity</th>
					<th style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>Product Cost</th>
				</tr>
			</thead>
			<tbody>
				{$orderItemDetails}
			</tbody>
		</table>";
		
		$find = ["{{user}}", "{{orderNumber}}", "{{order_amount}}", "{{orderDetails}}"];
		$replace = [$order->buyer->username, $order->id, $order->total_cost, $orderDetails];
		if($email){
		$email->template = str_replace($find, $replace, $email->template);
		
		$subject = 'You have received an Enquiry';
		$email_template = new Email($email->template, $email->subject);
		}else{
			$temp = 'Dear {{user}},<br>
            <p>Thank you for your purchase. Your order number is {{orderNumber}} and the total amount is {{order_amount}}. Please find the details of your order below:</p>
            {{orderDetails}}';
            $temp = str_replace($find, $replace, $temp);
            $subject = 'You have received an Enquiry';
            $email_template =  new Email($temp, $subject);
		}
		try {
			Mail::to($order->buyer->email)->send($email_template);
		} catch (\Exception $e) {
			\Log::error('Error sending email: ' . $e->getMessage());
			throw $e;
		}
		// redirect to order page
		return redirect()->route('order.history');
	}







	protected static function stripeFormat($amount)
	{

		$amount = round($amount,2);
		return $amount * 100;
	}

	public function countryName($countryId)
	{
		$country=Country::find($countryId);
		return $country->name;

	}
}
