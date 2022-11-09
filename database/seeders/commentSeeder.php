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
                'title' => 'Experience with Agile Scrum1',
                'comment' => 'Experience with Ember',
            ], [
                'post_id' => '2',
                'customer_id' => '2',
                'title' => 'Experience with Agile Scrum2',
                'comment' => 'Experience with Ember or other JavaScript2',
            ], [
                'post_id' => '3',
                'customer_id' => '3',
                'title' => 'Experience with Agile Scrum 3',
                'comment' => 'Experience with Ember or other JavaScript 3',
            ]
        ]);
    }
}
