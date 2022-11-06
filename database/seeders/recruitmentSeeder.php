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
        DB::table('recruitment')->insert([[
            'customer_id' => '1',
            'jobposting_id' => '1', 
            'status' => '0',
        ],[
            'customer_id' => '2',
            'jobposting_id' => '2', 
            'status' => '0',
        ]
        ,[
            'customer_id' => '3',
            'jobposting_id' => '3', 
            'status' => '1',
        ]
    ]);
    }
}