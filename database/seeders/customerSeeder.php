<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([[
            'email' => 'abc@gmail.com',
            'phone_number' => '000000',
            'fullname' => 'ABC', 
            'gender' => '0',
            'status' => '0', 
        ],
        [
            'email' => 'def@gmail.com',
            'phone_number' => '111111',
            'fullname' => 'DEF', 
            'gender' => '0',
            'status' => '1', 
        ],
        [
            'email' => 'xyz@gmail.com',
            'phone_number' => '222222',
            'fullname' => 'XYZ', 
            'gender' => '0',
            'status' => '1', 
        ],
    ]);
    }
}
