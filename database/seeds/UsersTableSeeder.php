<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'              =>  'Nipun',
            'email'             =>  'nipun@kiebot.com',
            'password'          =>  Hash::make('123'),
            'remember_token'    =>  str_random(10)
        ]);
    }
}
