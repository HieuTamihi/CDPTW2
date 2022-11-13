<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class commentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'post_id' => '1',
                'customer_id' => '1',
                'comment' => 'Experience with Ember',
                'created_at' => '2022-11-02',
                'updated_at' => '2022-11-03',
            ], [
                'post_id' => '2',
                'customer_id' => '1',
                'comment' => 'Experience with Ember or other JavaScript2',
                'created_at' => '2022-11-03',
                'updated_at' => '2022-11-04',
            ],
        ]);
    }
}
