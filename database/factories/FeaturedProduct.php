<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Shop\Featured::class, function (Faker $faker) {
    return [
        'product_id'=>rand(1,101),
        'featured'=>rand(0,1),
        'expire_at'=>$faker->dateTime
    ];
});
