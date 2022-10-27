<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class cvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cv')->insert([[
            'customer_id' => '1',
            'fullname' => 'Nguyễn Văn A',
            'avatar' => 'download.png', 
            'enjoy_tech' => 'PHP, laravel',
            'aplly_posion' => 'Dev',
            'email' => 'nguyenvana@gmail.com',
            'phone_number' => '0123456789',
            'gender' => '0',
            'exp_work' =>'5 nam',
            'skill' => 'git',
            'infor_order' => 'Tham gia cac chương trình, hội thảo liên quan đến ...'
        ],[
            'customer_id' => '2',
            'fullname' => 'Nguyễn Văn B',
            'avatar' => 'download.png', 
            'enjoy_tech' => 'PHP, laravel',
            'aplly_posion' => 'Dev',
            'email' => 'nguyenvanb@gmail.com',
            'phone_number' => '0123456789',
            'gender' => '0',
            'exp_work' =>'3 nam',
            'skill' => 'git',
            'infor_order' => 'Tham gia cac chương trình, hội thảo liên quan đến ...'
        ],[
            'customer_id' => '3',
            'fullname' => 'Nguyễn Thị C',
            'avatar' => 'download.png', 
            'enjoy_tech' => 'PHP, laravel',
            'aplly_posion' => 'Dev',
            'email' => 'nguyenthiC@gmail.com',
            'phone_number' => '0123456789',
            'gender' => '1',
            'exp_work' =>'5 nam',
            'skill' => 'git',
            'infor_order' => 'Tham gia cac chương trình, hội thảo liên quan đến ...'
        ]
    ]);
    }
}
