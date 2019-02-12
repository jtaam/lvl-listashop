<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Shop\Product::class, function (Faker $faker) {
    return [
        'title'=>$faker->unique()->sentence(4,true),
        'slug'=>$faker->unique()->slug(4),
        'sub_title'=>$faker->paragraph,
        'category_id'=>rand(1,10),
        'brand_id'=>rand(1,16),
        'color_id'=>rand(1,10),
        'price'=>rand(23,500),
        'new_price'=>rand(15,450),
        'description'=>$faker->paragraphs(3, true),
        'view_count'=>rand(0,300),
        'status'=>rand(0,1)
    ];
});
