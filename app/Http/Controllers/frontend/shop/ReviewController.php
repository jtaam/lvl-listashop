<?php

namespace App\Http\Controllers\frontend\shop;

use App\Models\Shop\Review;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function reviewStore(Request $request, $productId){
        $this->validate($request,[
            'rating'=>'required',
            'message'=>'required'
        ]);

        $review = new Review();
        $review->product_id = $productId;
        $review->stars = $request->rating;
        $review->user_id = Auth::id();
        $review->message = $request->message;
        $review->save();

        Toastr::success('Review added','Done!');

        return redirect()->back();
    }
}
