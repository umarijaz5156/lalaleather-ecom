<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $fillable = [
        'name','email','phone', 'address_line_1', 'address_line_2', 'city', 'state', 'zip_code', 'country', 'default','user_id'
    ];
    protected static function booted()
    {
        // static::saving(function ($model) {
        //     $model->setDefault();
        // });
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // save value of default base on user_id there only one is_default true if new address is_default true then update old address is_default false
    public function setDefault()
    {
        $userAddresses = $this->user->addresses;

            foreach ($userAddresses as $address) {
                $address->update(['default' => false]);
            }

            $this->default = true;
    }
    // get zone_id on base of country
    public function getZoneIdAttribute()
    {
        $zone = CountryZone::where('country_id',$this->country)->first();
        if($zone){
            return $zone->zone_id;
        }else{
            return null;
        }
    }
    
}