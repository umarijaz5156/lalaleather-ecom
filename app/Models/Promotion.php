<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'banner',
        'start_date',
        'end_date',
        'active',
        'storewide',
        'discount_percentage',
    ];
}