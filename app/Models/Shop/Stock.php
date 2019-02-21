<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
