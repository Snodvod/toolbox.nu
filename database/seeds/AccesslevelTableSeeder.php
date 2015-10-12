<?php

use Illuminate\Database\Seeder;

class AccesslevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accesslevels')->insert([
        	'name' => 'User',
        ]);
        DB::table('accesslevels')->insert([
        	'name' => 'Admin',
        ]);
    }
}
