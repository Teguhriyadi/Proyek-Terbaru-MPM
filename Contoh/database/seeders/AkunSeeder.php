<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create("id_ID");

    	for ($i = 1; $i <= 10; $i++)
    	{
    		User::create([
    			"username" => $faker->firstname,
    			"nama" => $faker->name,
    			"email" => $faker->email,
    			"password" => bcrypt("password"),
    			"created_by" => 1,
    			"updated_by" => 1,
    			"id_role" => mt_rand(1, 10)
    		]);
    	}
    }
}
