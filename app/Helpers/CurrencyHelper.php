<?php

use App\Models\Currency;
use App\Models\CurrencyExchangeRate;


    // Currency Calculator (amount, from, to)
    function currencyCalculator($amount, $from = 'USD', $to = null, $format = true)
    {
        if ($to == null) {
            // from get default currency funtion
            $to = getUserCurrency();
        }
        $from = ($from == '') ? 'USD': $from;

        $currency = Currency::where('code', $from)->first();
        $rate = isset($currency->exchageRate->rate) ? $currency->exchangeRate->rate : 1;
        
        $currency = Currency::where('code', $to)->first();
        $currencyExchangeRate = isset($currency->exchangeRate->rate) ? $currency->exchangeRate->rate : 1;

        $rate = $rate * $currencyExchangeRate;
        $result = round($amount * $rate, 2);
        return ($format) ? $currency->symbol . '' . $result : $result;
    }
    // getDefaultCurrency
    function getUserCurrency()
    {
        return session()->get('preferCurrency') ??  config('app.preferCurrency') ?? 'USD';
    }
    // getAllCurrencies
    function getAllCurrencies(){
        return Currency::select('code', 'name')
        ->whereIn('code', ['GBP', 'USD', 'EUR'])
        ->groupBy('code', 'name')
        ->orderBy('name', 'asc')
        ->get();
    }
    // setUserCurrency
    function setUserCurrency($currencyCode)
    {
        $currencyCode = (in_array($currencyCode,['GBP', 'USD', 'EUR'])) ? $currencyCode : 'USD';
        $currency = Currency::where('code', $currencyCode)->first();
        if ($currency) {
            session()->put('preferCurrency', $currencyCode);
            return true;
        }
        return false;
    }