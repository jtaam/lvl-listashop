<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable=['product_id','user_id','quantity','total'];
}
