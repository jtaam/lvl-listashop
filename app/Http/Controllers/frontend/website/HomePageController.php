<?php

namespace App\Http\Controllers\frontend\website;

use App\Models\Shop\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
    public function home(){
        $latestProducts = Product::latest()->take(8)->get();
        return view('frontend.website.index', compact('latestProducts'));
    }
}
