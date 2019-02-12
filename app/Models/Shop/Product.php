<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'slug', 'sub_title', 'category_id', 'brand_id', 'color_id', 'price', 'new_price', 'description', 'view_count', 'status'];

    public function images(){
        return $this->hasMany(Image::class);
    }
}
