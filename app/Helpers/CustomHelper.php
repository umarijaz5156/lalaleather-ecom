<?php

// File: app/Helpers/IpInfoHelper.php
use Illuminate\Http\Request;
// product modek
use App\Models\Product;
use Illuminate\Support\Facades\Cache;

if (!function_exists('ip_info')) {

    function ip_info($ip = null, $purpose = 'location', $deep_detect = true)
    {
        $output = null;
        $ip = $ip ?: request()->ip();
        // $ip = "111.88.87.138";
        // Check if the result is already cached
        $cacheKey = 'ip_info_' . $ip . '_' . $purpose;
        if (Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }

        // Deep detect IP address from headers
        if ($deep_detect) {
            if (request()->server('HTTP_X_FORWARDED_FOR') && filter_var(request()->server('HTTP_X_FORWARDED_FOR'), FILTER_VALIDATE_IP)) {
                $ip = request()->server('HTTP_X_FORWARDED_FOR');
            } elseif (request()->server('HTTP_CLIENT_IP') && filter_var(request()->server('HTTP_CLIENT_IP'), FILTER_VALIDATE_IP)) {
                $ip = request()->server('HTTP_CLIENT_IP');
            }
        }

        // Purpose and supported values
        $purpose = str_replace(['name', "\n", "\t", " ", "-", "_"], null, strtolower(trim($purpose)));
        $support = ['country', 'countrycode', 'state', 'region', 'city', 'location', 'address'];

        // Continents array
        $continents = [
            'AF' => 'Africa',
            'AN' => 'Antarctica',
            'AS' => 'Asia',
            'EU' => 'Europe',
            'OC' => 'Australia (Oceania)',
            'NA' => 'North America',
            'SA' => 'South America',
        ];

        if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
            $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));

            if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
                switch ($purpose) {
                    case 'location':
                        $output = [
                            'city' => @$ipdat->geoplugin_city,
                            'state' => @$ipdat->geoplugin_regionName,
                            'country' => @$ipdat->geoplugin_countryName,
                            'country_code' => @$ipdat->geoplugin_countryCode,
                            'continent' => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                            'continent_code' => @$ipdat->geoplugin_continentCode,
                        ];
                        break;

                    case 'address':
                        $address = [$ipdat->geoplugin_countryName];
                        if (@strlen($ipdat->geoplugin_regionName) >= 1) {
                            $address[] = $ipdat->geoplugin_regionName;
                        }
                        if (@strlen($ipdat->geoplugin_city) >= 1) {
                            $address[] = $ipdat->geoplugin_city;
                        }
                        $output = implode(', ', array_reverse($address));
                        break;

                    case 'city':
                        $output = @$ipdat->geoplugin_city;
                        break;

                    case 'state':
                    case 'region':
                        $output = @$ipdat->geoplugin_regionName;
                        break;

                    case 'country':
                        $output = @$ipdat->geoplugin_countryName;
                        break;

                    case 'countrycode':
                        $output = @$ipdat->geoplugin_countryCode;
                        break;
                }
            }
        }

        // Cache the result
        Cache::put($cacheKey, $output, now()->addHours(24));

        return $output;
    }
}

function isUserCountryValidForShipping(Product $product)
{

    $userCountryCode = ip_info()['country_code'] ?? null;

    if ($userCountryCode === null) {
        return false; // Unable to determine the user's country code
    }

    $shippingCountries = $product->shippingCountries('iso2');
    return in_array($userCountryCode, $shippingCountries);
}
