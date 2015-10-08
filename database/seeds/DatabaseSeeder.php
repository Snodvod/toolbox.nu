<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Tool;

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

        $tools = Tool::All();
        $users = User::All();

        for($i=1; $i<=50; $i++)
        {
            $rnd = rand(1,50);
            $rnd2 = rand(1,50);
            $users->find($i)->tools()->save($tools->find($rnd));
            $tools->find($i)->users()->save($users->find($rnd));
        }

        Model::reguard();
    }
}
