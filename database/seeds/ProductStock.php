<?php

use Illuminate\Database\Seeder;

class ProductStock extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Shop\Stock::class, 100)->create();
    }
}
