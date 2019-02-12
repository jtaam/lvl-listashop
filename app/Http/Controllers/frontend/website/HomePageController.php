<?php

namespace App\Http\Controllers\frontend\website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
    public function home(){
        return view('frontend.website.index');
    }
}
