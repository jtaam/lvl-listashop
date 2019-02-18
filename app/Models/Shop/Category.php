<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'description'];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function parent(){
        return $this->belongsTo(Category::class);
    }
}
