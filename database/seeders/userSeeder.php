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
                'email' => 'thaihieu243@gmail.com',
                'phone' => '0987712063',
                'password' => '$2y$10$y2NorDtAaQ9Wpkymi86zsu7U8X1zezLFKqPqkpT42pjkdJqVCTuLm',
                'role' => '1',
                'status' => '1',
            ]
        ]);
    }
}
