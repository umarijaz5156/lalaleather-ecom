<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'short_description',
        'description',
        'parent_id',
        'slug_store',
        'slug_manufacturer',
        'promotion_id',
        'icon_path',
        'banner_path',
        'enabled',
    ];

    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'title'
    //         ]
    //     ];
    // }

    protected function slugStore(): Attribute
    {
        return Attribute::make(
            set: fn($value) => Str::slug($value, '-')
        );
    }

    protected function slugManufacturer(): Attribute
    {
        return Attribute::make(
            set: fn($value) => Str::slug($value, '-')
        );
    }

    public function childCategories()
    {
        return $this->hasMany(\App\Models\Category::class, 'parent_id');
    }

    public function parentCategory()
    {
        return $this->belongsTo(\App\Models\Category::class, 'parent_id');
    }
    // category Level base having parent's parent 
    public function level()
    {
        $level = 1;
        $parent = $this->parentCategory;

        while ($parent) {
            $level++;
            $parent = $parent->parentCategory;
        }

        return $level;
    }

    public function manufacturerProducts()
    {
        return $this->belongsToMany(ManufacturerProduct::class);
    }

    public function blogs()
    {
        return $this->belongsToMany(BlogPost::class);
    }
    // public function parentCategory()
    // {
    //     return $this->belongsTo(Category::class, 'parent_id');
    // }

    // public function childCategories()
    // {
    //     return $this->hasMany(Category::class, 'parent_id');
    // }

    public function grandchildCategories()
    {
        return $this->hasManyThrough(
            Category::class,
            Category::class,
            'parent_id', // Foreign key on categories table
            'parent_id', // Foreign key on categories table
            'id',        // Local key on the current model (Category)
            'id'         // Local key on the intermediate model (Category)
        );
    }
    // products raltions with productcatgoreis
    public function products()
    {
        return $this->belongsToMany(Product::class,'product_categories', 'category_id', 'product_id');
    }
    // children
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

}
