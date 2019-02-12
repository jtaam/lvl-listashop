<?php

use Illuminate\Database\Seeder;

class ShopBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Shop\Brand::class,15)->create();
    }
}
