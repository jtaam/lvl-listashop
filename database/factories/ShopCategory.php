<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Shop\Category::class, function (Faker $faker) {
    return [
        'name'=>$faker->unique()->word,
        'slug'=>$faker->unique()->slug(1),
        'description'=>$faker->paragraph
    ];
});
