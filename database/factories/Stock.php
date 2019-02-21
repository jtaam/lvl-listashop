<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Shop\Stock::class, function (Faker $faker) {
    return [
        'product_id'=>rand(0,100),
        'amount'=>rand(0,100)
    ];
});
