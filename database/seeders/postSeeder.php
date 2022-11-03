<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([[
            'comment_id' => '1',
            'customer_id' => '1', 
            'title' => 'Experience with Agile Scrum1',
            'content' => 'Experience with Ember or other JavaScript1',
            'status' => '0',
        ],[
            'comment_id' => '2',
            'customer_id' => '2', 
            'title' => 'Experience with Agile Scrum2',
            'content' => 'Experience with Ember or other JavaScript2',
            'status' => '0',
        ]
        ,[
            'comment_id' => '3',
            'customer_id' => '3', 
            'title' => 'Experience with Agile Scrum 3',
            'content' => 'Experience with Ember or other JavaScript 3',
            'status' => '0',
        ]
    ]);
    }
}
