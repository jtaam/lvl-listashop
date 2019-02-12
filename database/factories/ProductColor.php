<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Shop\Color::class, function (Faker $faker) {
    return [
        'name'=>$faker->colorName,
        'slug'=>$faker->unique()->slug(2),
        'hexcode'=>$faker->hexColor
    ];
});
