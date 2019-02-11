<?php

namespace App\Http\Controllers\frontend\shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function shop(){
        return view('frontend.shop.shop');
    }
}
