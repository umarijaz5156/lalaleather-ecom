<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailConfig extends Model
{
    use HasFactory;
    //fillable
    protected $fillable = [
        'subject',
        'template_for',
        'template',
    ];

    

    public function setTemplateTypeAttribute($value)
    {
        $this->attributes['template_type'] = in_array($value, EmailTemplateType::all()) ? $value : null;
    }
}
