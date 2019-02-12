<?php

use Illuminate\Database\Seeder;

class ProductSpecificationFactory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();

        for ($i = 1; $i < 101; $i++) {
            \App\Models\Shop\Specification::create([
                'product_id' => $i,
                'width' => rand(100, 200),
                'height' => rand(150, 300),
                'depth' => rand(70, 200),
                'weight' => rand(100, 300),
                'quality_checking' => $faker->boolean,
                'freshness_duration' => rand(1, 20),
                'packeting' => $faker->sentence(4, true),
                'box_contains' => rand(20, 90)
            ]);
        }
    }
}
