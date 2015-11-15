<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Tool;
use App\Job;
use App\Expertise;
use App\Accesslevel;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ToolTableSeeder::class);
        $this->call(JobTableSeeder::class);
        $this->call(ExpertiseTableSeeder::class);
        $this->call(AccesslevelTableSeeder::class);
    }
}
