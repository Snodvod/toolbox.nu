<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'name'=> 'hamers'
        ]);
        DB::table('categories')->insert([
        	'name'=> 'beitels'
        ]);
        DB::table('categories')->insert([
        	'name'=> 'zagen'
        ]);
        DB::table('categories')->insert([
        	'name'=> 'verfborstels'
        ]);
        DB::table('categories')->insert([
        	'name'=> 'metsgereedschap'
        ]);
        DB::table('categories')->insert([
        	'name'=> 'boormachines'
        ]);
        DB::table('categories')->insert([
            'name'=> 'schroevendraaiers'
        ]);

        DB::table('categories')->insert([
        	'name'=> 'slijpers'
        ]);
        DB::table('categories')->insert([
        	'name'=> 'ladders'
        ]);
        DB::table('categories')->insert([
        	'name'=> 'bankvijzen'
        ]);
        DB::table('categories')->insert([
        	'name'=> 'branders'
        ]);
        DB::table('categories')->insert([
        	'name'=> 'schaafmachines'
        ]);
        DB::table('categories')->insert([
        	'name'=> 'freesmachines'
        ]);
        DB::table('categories')->insert([
        	'name'=> 'schuurmachines
        	'
        ]);


    }
}
