<?php

namespace App\Models\Shop;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['product_id', 'user_id', 'message'];

//   public function user(){
//       return $this->belongsTo(User::class);
//   }
}
