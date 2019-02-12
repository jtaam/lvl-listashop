<?php

namespace App\Http\Controllers\frontend\shop;

use App\Models\Shop\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function shop(){
        $products = Product::paginate(12)->onEachSide(1);
        return view('frontend.shop.index', compact('products'));
    }
}
