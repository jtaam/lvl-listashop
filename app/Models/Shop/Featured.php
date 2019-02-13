<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

class Featured extends Model
{
    protected $fillable = ['product_id', 'featured', 'expire_at'];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
