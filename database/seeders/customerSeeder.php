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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/detail_page
                'email' => 'thaihieu123@gmail.com',
                'phone_number' => '0123456789',
                'fullname' => 'Thai Hieu',
                'date' => '2002-10-11',
                'address' => 'Quận 9',
                'gender' => '0',
                'favorite' => 'Java, PHP',
                'status' => '1',
            ],
            [
                'email' => 'thaihieu124@gmail.com',
                'phone_number' => '0123456788',
                'fullname' => 'Nguyen Van A',
                'date' => '2002-10-10',
                'address' => 'Quận 7',
                'gender' => '0',
                'favorite' => 'Java, PHP, JS',
                'status' => '1',
            ],
            [
                'email' => 'thaihieu124@gmail.com',
                'phone_number' => '0123456785',
                'fullname' => 'Tran Van B',
                'date' => '2002-10-10',
                'address' => 'Quận 7',
                'gender' => '1',
                'favorite' => 'Java, PHP, JS',
                'status' => '1',
            ],
            [
                'email' => 'thaihieu124@gmail.com',
                'phone_number' => '0123456780',
                'fullname' => 'Nguyen Van C',
                'date' => '2002-10-10',
                'address' => 'Quận 7',
                'gender' => '1',
                'favorite' => 'Java, PHP, JS',
                'status' => '1',
            ],
            [
                'email' => 'thaihieu124@gmail.com',
                'phone_number' => '0123456782',
                'fullname' => 'Tran Van C',
                'date' => '2002-10-10',
                'address' => 'Quận 7',
                'gender' => '1',
                'favorite' => 'Java, PHP, JS',
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> blog_home
=======
>>>>>>> origin/change_password_employer
=======
>>>>>>> origin/detail_page
                'status' => '1',
            ],
        ]);
    }
}
