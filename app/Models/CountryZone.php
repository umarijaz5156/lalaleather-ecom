<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryZone extends Model
{
    use HasFactory;
    protected $table = 'country_zone';
    protected $fillable = [
        'country_id',
        'zone_id',
    ];
    public function zone()
    {
        return $this->belongsTo(Zone::class, 'zone_id');
    }

    // Define the relationship to Country
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
    
}
