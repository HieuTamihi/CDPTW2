<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class job_postingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_postings')->insert([
            [
                'employer_id' => '1',
                'title' => 'Full-Stack Java Software Engineer (JEE/ Spring/ Hibernate) | Up to $2000',
                'experience' => '1 năm',
                'type' => 'Fulltime',
                'skill' => 'Java, Full-Stack, Sping, Jee',
                'required' => 'Experience with Agile Scrum, Experience with Ember or other JavaScript, Familiarity with build tools such as Ant, Maven, and Gradle',
                'salary' => '2000',
                'token' => 'c4ca4238a0b923820dcc509a6f75849b'
            ],
            [
                'employer_id' => '2',
                'title' => '[All Levels/Fresher] Software engineers (SalesForce/Apex/Java)',
                'experience' => 'Mới ra trường, All Levels', 'type' => 'Fulltime',
                'skill' => 'Java, Salesforce, Software Engineer',
                'required' => 'Software engineers have bachelor degree in relevant field, from 0 up to 2 years of work experience , Familiar with Salesforce Apex programming language or JAVA, C++, .Net, Good mindset, ability to multi-task, prioritize, and manage time effectively',
                'salary' => '5** - 2***',
                'token' => 'c81e728d9d4c2f636f067f89cc14862c'
            ], [
                'employer_id' => '3',
                'title' => 'Sr. Back-end Developer (PHP/Laravel)',
                'experience' => '5 năm',
                'type' => 'Fulltime',
                'skill' => 'PHP, Laravel, Back-End',
                'required' => 'Bachelor’s Degree in Computer Science, Information Technology or related field ,5+ years of professional experience in building Web Applications using PHP Laravel; MySQL, Sound knowledge of Frontend Technologies including HTML5, JavaScript; CSS3',
                'salary' => 'Offer ',
                'token' => 'eccbc87e4b5ce2fe28308fd9f2a7baf3'
            ], [
                'employer_id' => '4',
                'title' => 'NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN BƯU ĐIỆN LIÊN VIỆT',
                'experience' => '5 năm',
                'type' => 'Fulltime',
                'skill' => 'PHP, Laravel, Back-End',
                'required' => 'Tạo phân quyền nhóm người sử dụng vào hệ thống ứng dụng CoreBanking; và một số hệ thống quản trị ngoài Corebanking, Giao tiếp cơ bản tiếng anh, Tìm kiếm tài liệu liên quan, Nhiệt tình,hòa đồng,thân thiện',
                'salary' => 'Offer ',
                'token' => 'a87ff679a2f3e71d9181a67b7542122c'
            ],
            [
                'employer_id' => '5',
                'title' => 'NGÂN HÀNG TP Bank',
                'experience' => '5 năm',
                'type' => 'Fulltime',
                'skill' => 'PHP, Laravel, Back-End',
                'required' => 'Tạo phân quyền nhóm người sử dụng vào hệ thống ứng dụng CoreBanking; và một số hệ thống quản trị ngoài Corebanking, Giao tiếp cơ bản tiếng anh, Tìm kiếm tài liệu liên quan, Nhiệt tình,hòa đồng,thân thiện',
                'salary' => 'Offer ',
                'token' => 'e4da3b7fbbce2345d7772b0674a318d5'
            ],
            [
                'employer_id' => '6',
                'title' => 'NGÂN HÀNG THƯƠNG MẠI Sacombank',
                'experience' => '5 năm',
                'type' => 'Fulltime',
                'skill' => 'PHP, Laravel, Back-End',
                'required' => 'Tạo phân quyền nhóm người sử dụng vào hệ thống ứng dụng CoreBanking; và một số hệ thống quản trị ngoài Corebanking, Giao tiếp cơ bản tiếng anh, Tìm kiếm tài liệu liên quan, Nhiệt tình,hòa đồng,thân thiện',
                'salary' => 'Offer ',
                'token' => '1679091c5a880faf6fb5e6087eb1b2dc'
            ],
            [
                'employer_id' => '7',
                'title' => 'NGÂN HÀNG THƯƠNG MẠI VIB',
                'experience' => '5 năm',
                'type' => 'Fulltime',
                'skill' => 'PHP, Laravel, Back-End',
                'required' => 'Tạo phân quyền nhóm người sử dụng vào hệ thống ứng dụng CoreBanking; và một số hệ thống quản trị ngoài Corebanking, Giao tiếp cơ bản tiếng anh, Tìm kiếm tài liệu liên quan, Nhiệt tình,hòa đồng,thân thiện',
                'salary' => 'Offer ',
                'token' => '8f14e45fceea167a5a36dedd4bea2543'
            ]
        ]);
    }
}