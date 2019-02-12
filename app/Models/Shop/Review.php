<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['product_id', 'stars', 'user_id', 'message'];
}
