<?php

namespace App\Http\Controllers\frontend\shop;

use App\Models\Shop\Comment;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function commentStore(Request $request, $productId){
//        dd($request->all());
        $this->validate($request,[
            'subject'=>'required',
            'message'=>'required'
        ]);

        $comment = new Comment();

        $comment->product_id = $productId;
        $comment->user_id = Auth::id();
        $comment->subject = $request['subject'];
        $comment->message = $request['message'];

        $comment->save();

        Toastr::success('Comment published.','Done!');

        return redirect()->back();
    }
}
