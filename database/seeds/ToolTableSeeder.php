<?php

use Illuminate\Database\Seeder;

class ToolTableSeeder extends Seeder
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
	    	$int = mt_rand(1262055681,1262055681);
	        DB::table('tools')->insert([
	            'name' => str_random(10),
	            'brand' => str_random(10),
	            'type' => str_random(10),
	            'bought_at' => date('Y-m-d H:i:s', $int),
	            'about' => str_random(30),
	        ]);
    	}

    }
}
