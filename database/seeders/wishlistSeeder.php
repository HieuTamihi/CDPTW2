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
        DB::table('wish_lists')->insert([
            [
                'id' => '1',
                'customer_id' => '1',
                'job_posting_id' => '1',
            ], [
                'id' => '2',
                'customer_id' => '2',
                'job_posting_id' => '2',
            ], [
                'id' => '3',
                'customer_id' => '3',
                'job_posting_id' => '3',
            ]
        ]);
    }
}
