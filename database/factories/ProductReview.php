<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Shop\Review::class, function (Faker $faker) {
    return [
        'product_id'=>rand(1,100),
        'stars'=>rand(1,5),
        'user_id'=>rand(1,20),
        'message'=>$faker->paragraph
    ];
});
