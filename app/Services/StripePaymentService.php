<?php

namespace App\Services;

use Stripe;
use App\Models\Order;
use Stripe\StripeClient;


use App\Models\Seller;

use App\Models\OrderItems;
use App\Models\PaymentStatus;
use App\Models\Payment;
use App\Models\Campaign;
use App\Models\Voting;

use App\Models\OrderToken;
use App\Models\StripeToken;
use Illuminate\Http\Request;
use App\Models\EmailTemplate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;
use App\Models\Country;
use App\Models\Product;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\UserProfile;
use Illuminate\Queue\NullQueue;
use Stripe\OrderItem;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Milon\Barcode\DNS1D;

class PaymentService
{
    protected StripeClient $StripeClient;

	public function __construct(StripeClient $StripeClient)
	{
		$this->StripeClient = $StripeClient;
	}
    public function fetchPaymentIntent(Order $order)
	{
		$paymentIntent = $order->paymentIntent;
		// if($paymentIntent)
		// 	$paymentIntent->delete();

		$order->fresh();

		if (!$order->paymentIntent) {
			
			$orderTotal = $order->total_cost ;
			$transferGroup = 'order_' . $order->id;

			$paymentIntent = $this->StripeClient->paymentIntents->create([
				'amount' => self::stripeFormat($orderTotal),
				'currency' => 'usd',
				'payment_method_types' => ['card'],
				'transfer_group' => "$transferGroup",
			]);

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
}
