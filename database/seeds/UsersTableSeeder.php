<?php

use Illuminate\Database\Seeder;
use Faker\Factory as f;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = f::create('App\User');
        for ($i=0;$i<15;$i++)
        {   $gender = $faker->randomElement(['M', 'F']);
            DB::table('users')->insert([
                'username' => $faker->userName,
                'name' => $faker->name,
                'email' => $faker->email,
                'role' => 0,
                'password' => bcrypt('secret'),
                'api_token' => str_random(60)
                
            ]);
        }
    }
}