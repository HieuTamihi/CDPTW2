<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD

=======
>>>>>>> origin/register_employer
class cvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        DB::table('cvs')->insert([
            [
                'customer_id' => '1',
                'namecv' => 'CV so 1',
                'fullname' => 'Nguyễn Văn A',
                'avatar' => 'download.png',
                'apply_position' => 'Dev',
                'email' => 'nguyenvana@gmail.com',
                'phone_number' => '0123456789',
                'date' => '1995-11-10',
                'exp_work' => '5 nam',
                'school_name' => 'SPKT',
                'learn_time' => '10/13 - 10/17',
                'majors' => 'IT',
                'infor_other' => 'Tham gia cac chương trình, hội thảo liên quan đến ...',
                'status' => '0',
                'created_at' => '2022-11-09 16:39:31',
                'updated_at' => '2022-11-09 16:39:31',
            ], [
                'customer_id' => '2',
                'namecv' => 'CV so 2',
                'fullname' => 'Nguyễn Văn B',
                'avatar' => 'download.png',
                'apply_position' => 'Dev',
                'email' => 'nguyenvanb@gmail.com',
                'phone_number' => '0123456789',
                'date' => '1995-11-10',
                'exp_work' => '3 nam',
                'school_name' => 'BK',
                'learn_time' => '10/15 - 10/19',
                'majors' => 'IT',
                'infor_other' => 'Tham gia cac chương trình, hội thảo liên quan đến ...',
                'status' => '0',
                'created_at' => '2022-11-09 16:39:31',
                'updated_at' => '2022-11-09 16:39:31',
            ], [
                'customer_id' => '3',
                'namecv' => 'CV so 3',
                'fullname' => 'Nguyễn Thị C',
                'avatar' => 'download.png',
                'apply_position' => 'Dev',
                'email' => 'nguyenthiC@gmail.com',
                'phone_number' => '0123456789',
                'date' => '1995-11-10',
                'exp_work' => '5 nam',
                'school_name' => 'KHTN',
                'learn_time' => '10/13 - 10/17',
                'majors' => 'IT',
                'infor_other' => 'Tham gia cac chương trình, hội thảo liên quan đến ...',
                'status' => '0',
                'created_at' => '2022-11-09 16:39:31',
                'updated_at' => '2022-11-09 16:39:31',
            ]
        ]);
=======
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
>>>>>>> origin/register_employer
    }
}
