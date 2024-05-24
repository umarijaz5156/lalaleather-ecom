<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingCost extends Model
{
    use HasFactory;
    protected $fillable = ['zone_id','product_id', 'cost', 'shipping_method', 'delivery_time'];

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }
    public function product()
    {
        return $this->belongsToMany(Product::class);
    }

}
