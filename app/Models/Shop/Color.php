<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = ['name', 'slug', 'hexcode'];
}
