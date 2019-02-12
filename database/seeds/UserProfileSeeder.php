<?php

use Illuminate\Database\Seeder;

class UserProfileSeeder extends Seeder
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

        for ($i=1; $i<31; $i++){
            App\Models\Website\Profile::create([
                'user_id'=> $i,
                'avatar'=>$faker->imageUrl(70,71,'people'),
                'first_name'=>$faker->firstName,
                'last_name'=>$faker->lastName,
                'phone_no'=>$faker->phoneNumber,
                'country'=>$faker->country,
                'address_one'=>$faker->address,
                'address_two'=>$faker->address,
                'city'=>$faker->city,
                'post_code'=>$faker->postcode,
                'note'=>$faker->paragraph
            ]);
        }
    }
}
