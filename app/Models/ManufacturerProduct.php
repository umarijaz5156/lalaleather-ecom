<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use VanOns\Laraberg\Traits\RendersContent;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

class ManufacturerProduct extends Model
{
    use HasFactory, RendersContent;

    protected $fillable = ['title', 'shop_product_url','product_slug', 'price', 'min_order_quantity', 'enabled', 'content', 'image'];

    public function categories()
    {
        return $this->belongsToMany(Category::class)->withPivot(['level']);
    }
    protected function productSlug(): Attribute
    {
        return Attribute::make(
            set: fn($value) => Str::slug($value, '-')
        );
    }
}
