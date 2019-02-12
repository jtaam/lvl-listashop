<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

class CommentReply extends Model
{
    protected $fillable = ['product_id', 'comment_id', 'user_id', 'message'];
}
