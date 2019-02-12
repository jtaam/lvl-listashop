<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['product_id', 'user_id', 'message'];
}
