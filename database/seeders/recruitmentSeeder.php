<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class recruitmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recruitments')->insert([
            [
                'customer_id' => '1',
                'jobposting_id' => '1',
                'cv_id' => null,
                'status' => '0',
                'file' => '1667982000.pdf',
            ], 
            [
                'customer_id' => '2',
                'jobposting_id' => '2',
                'cv_id' => null,
                'status' => '0',
                'file' => '1667982000.pdf',
            ],
            [
                'customer_id' => '3',
                'jobposting_id' => '2',
                'cv_id' => null,
                'status' => '0',
                'file' => '1667982000.pdf',
            ],
            [
                'customer_id' => '4',
                'jobposting_id' => '2',
                'cv_id' => null,
                'status' => '0',
                'file' => '1667982000.pdf',
            ],
            [
                'customer_id' => '5',
                'jobposting_id' => '2',
                'cv_id' => null,
                'status' => '0',
                'file' => '1667982000.pdf',
            ], [
                'customer_id' => '3',
                'jobposting_id' => '3',
                'cv_id' => null,
                'status' => '0',
                'file' => '1667982000.pdf',
            ]
        ]);
    }
}