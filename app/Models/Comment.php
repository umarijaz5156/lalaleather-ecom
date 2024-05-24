<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    // fillable
    protected $fillable = ['user_id', 'parent_id', 'product_id', 'comment', 'status'];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    // user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id', 'id')->orderBy('created_at', 'asc');
    }
}
