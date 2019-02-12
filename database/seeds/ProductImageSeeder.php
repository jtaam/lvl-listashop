<?php

use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 1; $i < 401; $i++) {
            App\Models\Shop\Image::create([
                'product_id'=>rand(1, 100),
                'image'=>$faker->imageUrl(555,600,'fashion')
            ]);
        }
    }
}
