<?php

use Illuminate\Database\Seeder;

class CommentReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 1; $i < 101; $i++) {
            \App\Models\Shop\CommentReply::create([
                'product_id' => $i,
                'comment_id' => rand(1, 100),
                'user_id' => rand(1, 30),
                'message' => $faker->paragraph
            ]);
        }
    }
}
