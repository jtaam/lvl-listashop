<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Shop\Tag::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->unique()->word,
        'slug' => $faker->unique()->slug(2),
        'description' => $faker->paragraph
    ];
});
