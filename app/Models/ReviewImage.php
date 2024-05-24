<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewImage extends Model
{
    use HasFactory;
    // fillable
    protected $fillable = ['review_id', 'path'];
    public function review()
    {
        return $this->belongsTo(Review::class);
    }
}
