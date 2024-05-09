<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function blogTag()
    {
        return $this->belongsTo(Tag::class);
    }
    public function blogCategory()
    {
        return $this->belongsTo(Category::class);
    }
}