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
        $this->call(ToolTableSeeder::class);
        $this->call(JobTableSeeder::class);
        $this->call(ExpertiseTableSeeder::class);
        $this->call(AccesslevelTableSeeder::class);

        //random relationships Tools - Users

        $tools = Tool::All();
        $users = User::All();
        $jobs = Job::All();
        $accesslevels = Accesslevel::All();

        //random relationships Users-Expertise

        $expertises = Expertise::All();

        for ($i=1; $i<=50 ; $i++) {
            $rndUser = $users->find(rand(1,50));
            $rndJob = $jobs->find(rand(1,50));
            $expertise = $expertises->find($i);
            $expertise->user()->associate($rndUser);
            $expertise->job()->associate($rndJob);
            $expertise->save();

        }

        $ino = new User();
        $ino->name = 'Ino Van Winckel';
        $ino->address = 'Arthur Boelstraat 38 2990 Wuustwezel';
        $ino->email = 'inovanwinckel@hotmail.com';
        $ino->password = bcrypt('wachtwoord');
        
        $admin = Accesslevel::find(2);

        $admin->users()->save($ino);
    }
}
