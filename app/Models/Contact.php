<?php

namespace App\Models;

use App\Mail\ContactMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    protected $table = 'contact-us';
    protected $fillable = [
        'name',
        'email',
        'message',
    ];
    use HasFactory;

    public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            $adminEmail = "your_admin_email@gmail.com";
            Mail::to($adminEmail)->send(new  ContactMail($item));
        });
    }
}
