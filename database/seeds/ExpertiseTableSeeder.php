<?php

use Illuminate\Database\Seeder;

class ExpertiseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=1; $i <= 50; $i++) { 
	    		DB::table('expertises')->insert([
	        	'title' => str_random(20),
	        	'description' => str_random(300),
        	]);
    	}
        
    }
}
