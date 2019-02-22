<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'slug', 'sub_title', 'category_id', 'brand_id', 'color_id', 'price', 'new_price', 'description', 'view_count', 'status'];

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function featured(){
        return $this->hasOne(Featured::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function specification(){
        return $this->hasOne(Specification::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function stock(){
        return $this->hasOne(Stock::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function color(){
        return $this->belongsTo(Color::class);
    }
}
