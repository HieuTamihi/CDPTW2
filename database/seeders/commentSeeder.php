<?php

namespace Database\Seeders;

<<<<<<< HEAD
<<<<<<< HEAD
use DateTime;
=======
>>>>>>> blog_home
=======
use DateTime;
>>>>>>> origin/detail_page
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
<<<<<<< HEAD
                'comment' => 'Experience with Ember',
=======
                'content_comment' => 'Experience with Ember',
>>>>>>> blog_home
            ], [
                'post_id' => '2',
                'customer_id' => '2',
                'title' => 'Experience with Agile Scrum2',
<<<<<<< HEAD
                'comment' => 'Experience with Ember or other JavaScript2',
=======
                'content_comment' => 'Experience with Ember or other JavaScript2',
>>>>>>> blog_home
            ], [
                'post_id' => '3',
                'customer_id' => '3',
                'title' => 'Experience with Agile Scrum 3',
<<<<<<< HEAD
                'comment' => 'Experience with Ember or other JavaScript 3',
=======
                'content_comment' => 'Experience with Ember or other JavaScript 3',
>>>>>>> blog_home
            ]
        ]);
    }
}
