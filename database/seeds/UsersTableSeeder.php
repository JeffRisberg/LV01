<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Bob Jones',
            'email' => 'bob@gmail.com',
            'password' => bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name' => 'Sally Smith',
            'email' => 'sally@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
