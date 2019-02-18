<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Shop\ParentCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->sentence(2, true),
        'slug' => $faker->slug(2),
        'description' => $faker->paragraph
    ];
});
