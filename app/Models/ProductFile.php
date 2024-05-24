<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFile extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'image_type', 'file_type', 'file_path', 'file_name', 'file_original_name'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
