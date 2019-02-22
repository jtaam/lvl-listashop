<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name', 'slug', 'logo', 'description'];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
