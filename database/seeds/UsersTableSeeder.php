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
        	'name' =>'sergio',
            'email' => 'hsclientes@hotmail.com',
            'password' => bcrypt('123456'),
            'admin' => true
        ]);
    }
}
