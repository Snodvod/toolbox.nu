<?php

use Illuminate\Database\Seeder;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=1; $i<=20 ; $i++) {
    		DB::table('jobs')->insert([
	        	'name' => str_random(10),
	        	'difficulty' => rand(1,5),
	        	'description' => str_random(100),
        	]);
    	}
    }
}
