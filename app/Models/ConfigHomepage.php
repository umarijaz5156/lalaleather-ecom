<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigHomepage extends Model
{
    use HasFactory;

    protected $fillable = ['configs'];

    protected function configs(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val, true),
            set: fn($val) => json_encode($val)
        );
    }
}
