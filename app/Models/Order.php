<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    use HasFactory;
    // guarded
    protected $guarded = [];

    public function paymentIntent()
	{
		return $this->hasOne(Payment::class,'order_id' ,'id');
	}
    public function savePaymentIntent($clientSecret,$paymentIntent,$orderGroup)
	{
		$payment = Payment::create([
			'order_id' => $this->id,
			'user_id' => $this->buyer_id,
			'amount' => $this->total_cost,
			'client_secret' =>$clientSecret,
			'payment_intent' =>$paymentIntent,
			'status' => 0 ,
			// 'order_group' => $orderGroup,
		]);
	}
	// buyer_id to user table
	public function buyer()
	{
		return $this->belongsTo(User::class,'buyer_id','id');
	}
	// address_id user address
	public function address()
	{
		return $this->belongsTo(UserAddress::class,'address_id','id');
	}
	public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
