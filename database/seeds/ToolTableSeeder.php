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
	        'name' => 'Handzaag',
	        'brand' => 'Stanley',
            'image' => 'handzaag.jpg',
	        'bought_at' => date('Y-m-d H:i:s', $int),
            'category_id' => 3,
	    ]);

        $int = mt_rand(1262055681,1262055681);
        DB::table('tools')->insert([
            'name' => 'Metaalzaag',
            'brand' => 'Stanley',
            'image' => 'metaalzaag.jpg',
            'bought_at' => date('Y-m-d H:i:s', $int),
            'category_id' => 3,
        ]);

        $int = mt_rand(1262055681,1262055681);
        DB::table('tools')->insert([
            'name' => 'Multibit met ratel',
            'brand' => 'Stanley',
            'image' => 'metaalzaag.jpg',
            'bought_at' => date('Y-m-d H:i:s', $int),
            'category_id' => 7,
        ]);
        $int = mt_rand(1262055681,1262055681);
        DB::table('tools')->insert([
            'name' => 'Schroevendraaierset Cushiongrip 6-delig',
            'brand' => 'Stanley',
            'image' => 'metaalzaag.jpg',
            'bought_at' => date('Y-m-d H:i:s', $int),
            'category_id' => 7,
        ]);
        $int = mt_rand(1262055681,1262055681);
        DB::table('tools')->insert([
            'name' => 'Klauwhamer Steelmaster 450gr',
            'brand' => 'Stanley',
            'image' => 'metaalzaag.jpg',
            'bought_at' => date('Y-m-d H:i:s', $int),
            'category_id' => 1,
        ]);
        $int = mt_rand(1262055681,1262055681);
        DB::table('tools')->insert([
            'name' => 'Voorhamer 4kg',
            'brand' => 'Polet',
            'image' => 'metaalzaag.jpg',
            'bought_at' => date('Y-m-d H:i:s', $int),
            'about' => 'Groten hamer jonge!',
            'category_id' => 1,
        ]);
    }
}
