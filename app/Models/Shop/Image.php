<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['product_id', 'image'];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
