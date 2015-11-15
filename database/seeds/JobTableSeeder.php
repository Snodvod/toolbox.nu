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
    	DB::table('jobs')->insert([
            'name' => 'timmeren',
            'difficulty' => 3,
            'description' => 'Iets met een hamer, hout en nagels'
        ]);

        DB::table('jobs')->insert([
            'name' => 'dakgoot repareren',
            'difficulty' => 3,
            'description' => 'Algemene reparatie van een dakgoot'
        ]);

        DB::table('jobs')->insert([
                'name' => 'muurtje metsen',
                'difficulty' => 4,
                'description' => 'Met mortel een mooie muur maken, zoals voor een huis.'
        ]);

        DB::table('jobs')->insert([
                'name' => 'Boomstronken zagen en splitten',
                'difficulty' => 3,
                'description' => 'Hout van omgezaagde bomen in stukken zagen en splitten zodat het als haardhout kan worden gebruikt.'
        ]);
    }
}
