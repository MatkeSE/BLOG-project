<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
   
    
    public function tag()
    {

      
        return $this->hasMany(Blog::class,'tag_id','id');
    }


 
}
