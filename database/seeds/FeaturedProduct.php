<?php

use Illuminate\Database\Seeder;

class FeaturedProduct extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Shop\Featured::class, 20)->create();
    }
}
