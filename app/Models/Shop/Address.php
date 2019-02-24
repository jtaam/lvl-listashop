<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['first_name', 'last_name', 'company', 'phone', 'email', 'country', 'address_one', 'address_two', 'city', 'district', 'postcode', 'order_notes'];
}
