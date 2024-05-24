<?php

namespace App\Http\Controllers;
// Order model
use App\Models\Order;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Support\Facades\Session; 
use Illuminate\Support\Facades\Redirect;
use PayPal\Api\Payment; // Make sure to include this line
use PayPal\Api\PaymentExecution;

use App\Models\EmailConfig;
use App\Mail\Email; 
use Illuminate\Support\Facades\Mail;


class PayPalController extends Controller
{
    private $_api_context;
    public function __construct()
    {
        // Initialize the PayPal API context in the constructor
        $this->_api_context = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                config('paypal.sandbox.client_id'),
                config('paypal.sandbox.secret')
            )
        );

        // Set the PayPal API context configuration
        $this->_api_context->setConfig([
            'mode' => 'sandbox', // or 'live' for production
            'http.ConnectionTimeOut' => 30,
            'log.LogEnabled' => true,
            'log.FileName' => storage_path('logs/paypal.log'),
            'log.LogLevel' => 'ERROR',
            
        ]);
        
    }
 
    public function payWithpaypal(Order $order,Request $request)
    {
        if($order->status == 1 || $order->status == 'paid'){
            return redirect()->route('order.history')->with('error', 'Order already paid');
        }
        // $totalCost = session()->get('totalShippingCost') + session()->get('totalProductCost') ;
		$totalCost = currencyCalculator($order->total_cost,'USD',null,false);
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('success.payment',['order' => $order]),
                "cancel_url" => route('buy'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => getUserCurrency(),
                        "value" => $totalCost
                    ]
                ]
            ]
        ]);
        if (isset($response['id']) && $response['id'] != null) {
            Session::put('paypal_payment_id', $response['id']);
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }
            dd($response);
            // return redirect()
            //     ->route('cancel.payment')
            //     ->with('error', 'Something went wrong.');
        } else {
            dd($response);
            // return redirect()
            //     ->route('create.payment')
            //     ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }
    public function paymentSuccess(Order $order,Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            $order->update([
                'status' => 'paid',
                'method' => 'paypal',
            ]);
            // $order items quantity update
            foreach ($order->orderItems as $orderItem) {
                $orderItem->product->update([
                    'quantity' => $orderItem->product->quantity - $orderItem->product_quantity,
                ]);
            }
            Session::forget('paypal_payment_id');
            // foret cart 
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
            //  order.pay/order id
            return redirect()->route('order.history')->with('success', 'Payment success');
                
        } else {
            return redirect()
                ->route('order.history')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }
}
