<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class wishlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wish_list')->insert([
            [
                'customer_id' => '1',
                'job_posting_id' => '1',
                'number' => '0',
            ], [
                'customer_id' => '2',
                'job_posting_id' => '2',
                'number' => '0',
            ], [
                'customer_id' => '3',
                'job_posting_id' => '3',
                'number' => '1',
            ]
        ]);
    }
}
