<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SizeImage extends Model
{
    use HasFactory;

    protected $fillable = ['size_id' ,'file_path'];

    public function size()
    {
        return $this->belongsTo(Size::class);
    }
}
