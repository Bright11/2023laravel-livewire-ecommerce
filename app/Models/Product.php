<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function Category(){
        return $this->belongsTo(Category::class,'id');
    }
    public function Cart(){
        return $this->hasMany(Cart::class);
    }
}
