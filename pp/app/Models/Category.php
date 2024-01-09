<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable=['name','slug','description','image','is_showing','is_popular','meta_title','meta_description','meta_keywords'];

    public function products(){
        return $this->hasMany(Product::class);
    }
}

