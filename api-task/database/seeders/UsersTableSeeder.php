<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        [
            'name'=>'khaled',
            'email'=>'khaled@mail.com',
            'password'=>Hash::make('123456'),
        ],
        [
            'name'=>'ahmad',
            'email'=>'ahmad@mail.com',
            'password'=>Hash::make('123456'),
        ],
        [
            'name'=>'ali',
            'email'=>'ali@mail.com',
            'password'=>Hash::make('123456'),
        ],
    ]);  
    }
}
