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
      User::create(array(
        'name' => 'root',
        'email' => 'root@root.com',
        'password' => 'root'
      ));
    }
}
