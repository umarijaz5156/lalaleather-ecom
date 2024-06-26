<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigBasic extends Model
{
    use HasFactory;

    protected $fillable = ['id','site_title', 'meta_title', 'meta_description', 'logo_image', 'fav_icon', 'admin_email','dynamic_notice'];
}
