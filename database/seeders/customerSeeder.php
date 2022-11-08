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
                'gender' => '0',
                'status' => '1',
            ],
            [
                'email' => 'thaihieu124@gmail.com',
                'phone_number' => '0123456788',
                'fullname' => 'DEF',
                'gender' => '0',
                'status' => '1',
            ],
        ]);
    }
}
