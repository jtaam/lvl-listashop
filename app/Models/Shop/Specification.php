<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    protected $fillable = ['product_id', 'width', 'height', 'depth', 'weight', 'quality_checking', 'freshness_duration', 'packeting', 'box_contains'];
}
