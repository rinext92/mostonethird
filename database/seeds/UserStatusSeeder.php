<?php

use Illuminate\Database\Seeder;
use Faker\Factory as f;

class UserStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array('status'=>'0','name'=>'ACTIVE'),
            array('status'=>'1','name'=>'BLOCKED'),
    	);
    	
        DB::table('user_status')->insert($data);
    }
}