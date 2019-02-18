<?php

use Illuminate\Database\Seeder;

class ParentCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Shop\ParentCategory::class, 10)->create();
    }
}
