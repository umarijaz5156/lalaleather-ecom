<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingMethod extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'symbol'];

    public function zones()
    {
        return $this->belongsToMany(Zone::class);
    }
}
