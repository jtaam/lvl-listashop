<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = ['name', 'slug', 'hexcode'];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
