<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'additional_detail', 'category_id', 'sku', 'gender', 'price_original', 'price_discounted', 'quantity','moq' , 'size_chart_id', 'is_custom', 'is_active', 'is_promoted','parentCategory','childCategory','grandChildCategory','product_slug'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function sizeChart()
    {
        return $this->belongsTo(Size::class, 'size_chart_id');
    }

    public function shippingCost()
    {
        return $this->belongsToMany(ShippingCost::class);
    }

    public function images()
    {
        return $this->hasMany(ProductFile::class, 'product_id');
    }

    public function faqs()
    {
        return $this->hasMany(ProductFaq::class, 'product_id');
    }

    public function features()
    {
        return $this->hasMany(ProductFeature::class, 'product_id');
    }
    public function files()
    {
        return $this->hasMany(ProductFile::class);
    }

    public function shippingCosts()
    {
        return $this->hasMany(ShippingCost::class);
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function categories()
    {
        return $this->hasMany(ProductCategory::class);
    }
    // return categories with level 0 ,1 2 with option asc and desc and with parent id
   
    public function getCategoryByLevel($level = null, $order = 'desc')
    {
        $categories = $this->categories;

        if ($level !== null) {
            $categories = $categories->filter(function ($category) use ($level) {
                return $category->level == $level;
            });
        }

        return $categories->sortBy(function ($category) use ($order) {
            return $order == 'asc' ? $category->level : -$category->level;
        });
    }
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    // shippingCountries
    public function shippingCountries($pluck = false)
    {
        
        if ($pluck) {
            return $this->shippingCosts()->with('zone.countries:id,iso2,name')->get()->pluck('zone.countries')->collapse()->pluck($pluck)->toArray();
        }

        return $this->shippingCosts()->with('zone.countries:id,iso2,name')->get()->pluck('zone.countries')->collapse()->toArray();
    }
    protected function productSlug(): Attribute
    {
        return Attribute::make(
            set: fn($value) => Str::slug($value, '-')
        );
    }
}
