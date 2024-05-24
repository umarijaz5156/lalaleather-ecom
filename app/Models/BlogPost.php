<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'image', 'content'];

    public function categories()
    {
        return $this->belongsToMany(Category::class)->withPivot(['level']);
    }

    protected function slug(): Attribute
    {
        return Attribute::make(
            set: fn($value) => Str::slug($value, '-')
        );
    }
}
