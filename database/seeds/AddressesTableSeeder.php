<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
        	'user_id' => 1,
        	'country' => 'Belgium',
        	'place' => 'Wuustwezel',
        	'code' => '2990',
        	'street' => 'Arthur Boelstraat',
        	'number' => '38'
        ]);
    }
}
