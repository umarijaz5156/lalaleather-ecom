<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

    protected $table = 'product_variants';

    protected $fillable = [
        'product_id',
        'variant_id',
        'variant_option_id',
        'cost',
    ];
    // variant
    public function variant(){
        return $this->belongsTo(Variant::class, 'variant_id','id');
    } 
    // variant option
    public function variantOption(){
        return $this->belongsTo(VariantOption::class, 'variant_option_id','id');
    }


}
