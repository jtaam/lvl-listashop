<?php

namespace App\Http\Controllers\frontend\shop;

use App\Models\Shop\Product;
use App\Models\Shop\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function shop(){
        $products = Product::paginate(16)->onEachSide(1);
        return view('frontend.shop.index', compact('products'));
    }

    public function productDetails($slug){
        $product = Product::where('slug',$slug)->first();
        return view('frontend.shop.details', compact('product'));
    }
}
