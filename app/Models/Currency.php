<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// CurrencyExchangeRate model



class Currency extends Model
{
    use HasFactory;
    protected $fillable = ['code'];

    public function exchangeRate()
    {
        return $this->hasOne(CurrencyExchangeRate::class, 'currency_code', 'code');
    }
}
