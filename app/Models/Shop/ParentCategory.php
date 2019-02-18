<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

class ParentCategory extends Model
{
    protected $fillable=['name','slug','description'];

    public function categories(){
        return $this->hasMany(Category::class);
    }

}
