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
        DB::table('customers')->insert([
            [
                'email' => 'thaihieu123@gmail.com',
                'phone_number' => '0123456789',
                'fullname' => 'ABC',
                'date' => '2002-10-11',
                'address' => 'Quận 9',
                'gender' => '0',
                'favorite' => 'Java, PHP',
                'status' => '1',
            ],
            [
                'email' => 'thaihieu124@gmail.com',
                'phone_number' => '0123456788',
                'fullname' => 'DEF',
                'date' => '2002-10-10',
                'address' => 'Quận 7',
                'gender' => '0',
                'favorite' => 'Java, PHP, JS',
                'status' => '1',
            ],
        ]);
    }
}