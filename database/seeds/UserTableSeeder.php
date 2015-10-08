<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i=1; $i<=50; $i++) 
    	{
	        DB::table('users')->insert([
	            'name' => str_random(10),
	            'adress' => str_random(30),
	            'email' => str_random(10).'@gmail.com',
	            'password' => bcrypt('secret'),
	        ]);
	    }
    }
}
