<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Shop\Brand::class, function (Faker $faker) {
    return [
        'name'=>$faker->unique()->word,
        'slug'=>$faker->unique()->slug(2),
        'logo'=>$faker->imageUrl(120,70),
        'description'=>$faker->paragraph
    ];
});
