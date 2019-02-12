<?php

use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
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

        for ($i = 1; $i < 101; $i++){
            \App\Models\Shop\Comment::create([
                'product_id'=>$i,
                'user_id'=>rand(1,30),
                'message'=>$faker->paragraph
            ]);
        }
    }
}
