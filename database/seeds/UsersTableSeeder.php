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
        	'name' => 'alfredo',
        	'email' => 'alfredo@ceanla.com',
        	'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'carlos',
            'email' => 'carlos@ceanla.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'denisse',
            'email' => 'denisse@ceanla.com',
            'password' => bcrypt('123456')
        ]);
    }
}
