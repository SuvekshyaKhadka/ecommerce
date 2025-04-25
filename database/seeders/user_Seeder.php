<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use Illuminate\support\facades\Hash;

class user_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       //
       DB::table('users')->insert([
        'name'=>'Suvekshya Khadka',
        "email"=>'subi@gmail.com',
        "password"=>Hash::make('1234')
       ]);
    }
}
