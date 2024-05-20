<?php

namespace App\Models;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
