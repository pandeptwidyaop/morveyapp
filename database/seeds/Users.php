<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name' => 'Pande Putu Widya Oktapratama',
          'email' => 'widya.oktapratama@gmail.com',
          'password' => '$2y$10$DXC/b2VanXn20mFcDVTX5OHCxJoFAOmuOEKfU8CK427oS/.ph3TFW',
          'level' => 1
        ]);
    }
}
