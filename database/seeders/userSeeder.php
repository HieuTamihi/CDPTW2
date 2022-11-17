<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
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
                'email' => 'admin@gmail.com',
                'phone' => '0987712063',
                'password' => '$2y$10$MMo3y1jxrv5hxGNzZrzivumc/FOzkCAXM6JumDcANaoCi23/wRHka',
                'customer_id' => null,
                'role' => '1',
                'status' => '1',
            ],
            [
                'email' => 'levantuan1293@gmail.com',
                'phone' => '0987712063',
                'password' => '$2y$10$MMo3y1jxrv5hxGNzZrzivumc/FOzkCAXM6JumDcANaoCi23/wRHka',
                'customer_id' => null,
                'role' => '2',
                'status' => '1',
            ],
            [
                'email' => 'thaihieu244@gmail.com',
                'phone' => '0987712063',
                'password' => '$2y$10$y2NorDtAaQ9Wpkymi86zsu7U8X1zezLFKqPqkpT42pjkdJqVCTuLm',
                'customer_id' => null,
                'role' => '2',
                'status' => '1',
            ],
            [
                'email' => 'thaihieu245@gmail.com',
                'phone' => '0987712063',
                'password' => '$2y$10$y2NorDtAaQ9Wpkymi86zsu7U8X1zezLFKqPqkpT42pjkdJqVCTuLm',
                'customer_id' => null,
                'role' => '2',
                'status' => '1',
            ], [
                'email' => 'thaihieu246@gmail.com',
                'phone' => '0987712063',
                'password' => '$2y$10$y2NorDtAaQ9Wpkymi86zsu7U8X1zezLFKqPqkpT42pjkdJqVCTuLm',
                'customer_id' => null,
                'role' => '2',
                'status' => '1',
            ], [
                'email' => 'thaihieu247@gmail.com',
                'phone' => '0987712063',
                'password' => '$2y$10$y2NorDtAaQ9Wpkymi86zsu7U8X1zezLFKqPqkpT42pjkdJqVCTuLm',
                'customer_id' => null,
                'role' => '2',
                'status' => '1',
            ], [
                'email' => 'thaihieu123@gmail.com',
                'phone' => '0123456789',
                'password' => '$2y$10$y2NorDtAaQ9Wpkymi86zsu7U8X1zezLFKqPqkpT42pjkdJqVCTuLm',
                'customer_id' => '1',
                'role' => '3',
                'status' => '1',
            ]
            , [
                'email' => 'thaihieu124@gmail.com',
                'phone' => '0123456788',
                'password' => '$2y$10$y2NorDtAaQ9Wpkymi86zsu7U8X1zezLFKqPqkpT42pjkdJqVCTuLm',
                'customer_id' => '2',
                'role' => '3',
                'status' => '1',
            ]
        ]);
    }
}