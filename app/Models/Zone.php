<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;


class Zone extends Model
{
    use HasFactory;
    protected $fillable = [
        'zone_name',
        'status',
    ];
    // ShippingCost
    public function shippingCosts()
    {
        return $this->hasMany(ShippingCost::class);
    }
    public function countries()
    {
        return $this->belongsToMany(Country::class, 'country_zone');
    }
    public function countryZones()
    {
        return $this->hasMany(CountryZone::class, 'zone_id');
    }

    public function getCountryNamesAttribute()
    {
        $countryNames = $this->countryZones->pluck('country.name')->implode(', ');

        return $countryNames ?: 'No countries associated'; // Handle case where there are no countries
    }
    // getCountryAttribute(return type array and name of function)
    public function getCountryAttribute($column = 'id',$type = 'array')
    {
        $country = $this->countryZones->pluck('country.'.$column)->toArray();
        if($type == 'array'){
            return $country;
        }else{
            return implode(', ',$country);
        }     
    }

    public function shippingMethods()
    {
        return $this->belongsToMany(ShippingMethod::class);
    }
}
