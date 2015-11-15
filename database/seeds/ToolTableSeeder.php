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
        $int = mt_rand(1262055681,1262055681);
        DB::table('tools')->insert([
	        'user_id' => 1,
	        'name' => 'Handzaag',
	        'brand' => 'Stanley',
	        'bought_at' => date('Y-m-d H:i:s', $int),
            'category_id' => 3,
	    ]);

        $int = mt_rand(1262055681,1262055681);
        DB::table('tools')->insert([
            'user_id' => 1,
            'name' => 'Metaalzaag',
            'brand' => 'Stanley',
            'bought_at' => date('Y-m-d H:i:s', $int),
            'category_id' => 3,
        ]);

        $int = mt_rand(1262055681,1262055681);
        DB::table('tools')->insert([
            'user_id' => 1,
            'name' => 'Multibit met ratel',
            'brand' => 'Stanley',
            'bought_at' => date('Y-m-d H:i:s', $int),
            'category_id' => 7,
        ]);
        $int = mt_rand(1262055681,1262055681);
        DB::table('tools')->insert([
            'user_id' => 1,
            'name' => 'Schroevendraaierset Cushiongrip 6-delig',
            'brand' => 'Stanley',
            'bought_at' => date('Y-m-d H:i:s', $int),
            'category_id' => 7,
        ]);
        $int = mt_rand(1262055681,1262055681);
        DB::table('tools')->insert([
            'user_id' => 1,
            'name' => 'Klauwhamer Steelmaster 450gr',
            'brand' => 'Stanley',
            'bought_at' => date('Y-m-d H:i:s', $int),
            'category_id' => 1,
        ]);
        $int = mt_rand(1262055681,1262055681);
        DB::table('tools')->insert([
            'user_id' => 1,
            'name' => 'Voorhamer 4kg',
            'brand' => 'Polet',
            'bought_at' => date('Y-m-d H:i:s', $int),
            'about' => 'Groten hamer jonge!',
            'category_id' => 1,
        ]);
    }
}
