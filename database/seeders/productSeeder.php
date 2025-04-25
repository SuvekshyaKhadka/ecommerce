<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    //     DB::table('product')->insert([
    //     'name'=>'LG mobile',
    //     "price"=>'10,000',
    //     "description"=>'this is the lg 8gb mobile phone with advanced featurs and sleek design',
    //     "category"=>'mobile',
    //     "gallery"=>"https://images.pexels.com/photos/15315956/pexels-photo-15315956.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=500&w=1400&dpr=1"
    // ]);
    // this for the single database input into the database for the seeding

        DB::table('product')->insert([
            [
                'name'=>'LG mobile',
                "price"=>'10,000',
                "description"=>'this is the lg 8gb mobile phone with advanced featurs and sleek design',
                "category"=>'mobile',
                "gallery"=>"https://images.pexels.com/photos/15315956/pexels-photo-15315956.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=500&w=1400&dpr=1"

            ],
            [
            'name'=>'LG mobile',
            "price"=>'10,000',
            "description"=>'this is the lg 8gb mobile phone with advanced featurs and sleek design',
            "category"=>'mobile',
            "gallery"=>"https://images.pexels.com/photos/15315956/pexels-photo-15315956.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=500&w=1400&dpr=1"

            ],
            [
                'name'=>'LG mobile',
                "price"=>'10,000',
                "description"=>'this is the lg 8gb mobile phone with advanced featurs and sleek design',
                "category"=>'mobile',
                "gallery"=>"https://images.pexels.com/photos/15315956/pexels-photo-15315956.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=500&w=1400&dpr=1"

            ],
            [
                'name'=>'LG mobile',
                "price"=>'10,000',
                "description"=>'this is the lg 8gb mobile phone with advanced featurs and sleek design',
                "category"=>'mobile',
                "gallery"=>"https://images.pexels.com/photos/15315956/pexels-photo-15315956.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=500&w=1400&dpr=1"

            ]
        ]);
    }
}
