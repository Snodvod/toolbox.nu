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
		DB::table('users')->insert([
			'name' => 'Kristof Sweerts',
			'email' => 'kristof.sweerts@gmail.com',
			'password' => bcrypt('secret')
		]);

		DB::table('users')->insert([
			'name' => 'Ino Van Winckel',
	        'email' => 'inovanwinckel@hotmail.com',
	        'password' => bcrypt('wachtwoord')
		]);

    	for($i=1; $i<=50; $i++) 
    	{
	        DB::table('users')->insert([
	            'name' => str_random(10),
	            'email' => str_random(10).'@gmail.com',
	            'password' => bcrypt('secret')
	        ]);
	    }
    }
}
