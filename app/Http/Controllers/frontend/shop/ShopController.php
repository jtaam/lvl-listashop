<?php

namespace App\Http\Controllers\frontend\shop;

use App\Models\Shop\Category;
use App\Models\Shop\Product;
use App\Models\Shop\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function shop(){
        $products = Product::paginate(9);
        return view('frontend.shop.shop', compact('products'));
    }

    public function productDetails($slug){
        $product = Product::where('slug',$slug)->first();
        return view('frontend.shop.details', compact('product'));
    }

    public function productsByCategory($slug){
        $category = Category::where('slug', $slug)->first();
        $products = $category->products()->paginate(15)->onEachSide(3);
        return view('frontend.shop.productsByCategory', compact('products','category'));
    }

//    public function articlesByTag($slug){
//        $tag = NewsTag::where('slug', $slug)->first();
//        $articles = $tag->articles()->paginate(18)->onEachSide(1);
//        return view('frontend.news.tag.index', compact('articles', 'tag'));
//    }
}
