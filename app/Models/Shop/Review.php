<?php

namespace App\Models\Shop;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['product_id', 'stars', 'user_id', 'message'];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}