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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'salary' => '2000',
                'token' => 'c4ca4238a0b923820dcc509a6f75849b'
<<<<<<< HEAD
<<<<<<< HEAD
            ], [
=======
            ],
            [
>>>>>>> CRUD_Job_By_Emloy_id
=======
            ],
            [
>>>>>>> RUEmployer_By_ID
                'employer_id' => '2',
                'title' => '[All Levels/Fresher] Software engineers (SalesForce/Apex/Java)',
                'experience' => 'Mới ra trường, All Levels', 'type' => 'Fulltime',
                'skill' => 'Java , Salesforce, Software Engineer',
<<<<<<< HEAD
<<<<<<< HEAD
                'required' => 'Software engineers have bachelor degree in relevant field, from 0 up to 2 years of work experience ,
                Familiar with Salesforce Apex programming language or JAVA, C++, .Net, 
                Good mindset, ability to multi-task, prioritize, and manage time effectively',
=======
                'required' => 'Software engineers have bachelor degree in relevant field, from 0 up to 2 years of work experience , Familiar with Salesforce Apex programming language or JAVA, C++, .Net, Good mindset, ability to multi-task, prioritize, and manage time effectively',
>>>>>>> CRUD_Job_By_Emloy_id
=======
                'required' => 'Software engineers have bachelor degree in relevant field, from 0 up to 2 years of work experience , Familiar with Salesforce Apex programming language or JAVA, C++, .Net, Good mindset, ability to multi-task, prioritize, and manage time effectively',
>>>>>>> RUEmployer_By_ID
                'salary' => '5** - 2***',
                'token' => 'c81e728d9d4c2f636f067f89cc14862c'
=======
                'salary' => '2000'
            ], [
=======
                'salary' => '2000',
                'token' => 'c4ca4238a0b923820dcc509a6f75849b'
            ],
            [
>>>>>>> origin/change_password_employer
                'employer_id' => '2',
                'title' => '[All Levels/Fresher] Software engineers (SalesForce/Apex/Java)',
                'experience' => 'Mới ra trường, All Levels', 'type' => 'Fulltime',
                'skill' => 'Java , Salesforce, Software Engineer',
<<<<<<< HEAD
                'required' => 'Software engineers have bachelor degree in relevant field, from 0 up to 2 years of work experience ,
            Familiar with Salesforce Apex programming language or JAVA, C++, .Net,
            Good mindset, ability to multi-task, prioritize, and manage time effectively',
                'salary' => '5** - 2***'
>>>>>>> blog_home
=======
                'required' => 'Software engineers have bachelor degree in relevant field, from 0 up to 2 years of work experience , Familiar with Salesforce Apex programming language or JAVA, C++, .Net, Good mindset, ability to multi-task, prioritize, and manage time effectively',
                'salary' => '5** - 2***',
                'token' => 'c81e728d9d4c2f636f067f89cc14862c'
>>>>>>> origin/change_password_employer
=======
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
>>>>>>> origin/detail_page
            ], [
                'employer_id' => '3',
                'title' => 'Sr. Back-end Developer (PHP/Laravel)',
                'experience' => '5 năm',
                'type' => 'Fulltime',
                'skill' => 'PHP, Laravel, Back-End',
                'required' => 'Bachelor’s Degree in Computer Science, Information Technology or related field ,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/change_password_employer
=======
>>>>>>> origin/detail_page
                5+ years of professional experience in building Web Applications using PHP Laravel; MySQL, 
                Sound knowledge of Frontend Technologies including HTML5, JavaScript; CSS3',
                'salary' => 'Offer ',
                'token' => 'eccbc87e4b5ce2fe28308fd9f2a7baf3'
            ], [
                'employer_id' => '4',
                'title' => 'NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN BƯU ĐIỆN LIÊN VIỆT',
                'experience' => '5 năm',
                'type' => 'Fulltime',
                'skill' => 'PHP, Laravel, Back-End',
                'required' => 'Tạo phân quyền nhóm người sử dụng vào hệ thống ứng dụng CoreBanking; và một số hệ thống quản trị ngoài Corebanking',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'salary' => 'Offer '
=======
                'salary' => 'Offer ',
                'token' => 'a87ff679a2f3e71d9181a67b7542122c'
>>>>>>> CRUD_Employer_By_ID
=======
                'salary' => 'Offer ',
                'token' => 'a87ff679a2f3e71d9181a67b7542122c'
>>>>>>> CRUD_Job_By_Emloy_id
=======
                'salary' => 'Offer ',
                'token' => 'a87ff679a2f3e71d9181a67b7542122c'
>>>>>>> RUEmployer_By_ID
=======
                'salary' => 'Offer ',
                'token' => 'a87ff679a2f3e71d9181a67b7542122c'
>>>>>>> origin/change_password_employer
=======
                'salary' => 'Offer ',
                'token' => 'a87ff679a2f3e71d9181a67b7542122c'
>>>>>>> origin/detail_page
            ],
            [
                'employer_id' => '5',
                'title' => 'NGÂN HÀNG TP Bank',
                'experience' => '5 năm',
                'type' => 'Fulltime',
<<<<<<< HEAD
                'skill' => 'PHP , Laravel, Back-End',
                'required' => 'Tạo phân quyền nhóm người sử dụng vào hệ thống ứng dụng CoreBanking; và một số hệ thống quản trị ngoài Corebanking',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'salary' => 'Offer '
=======
                'salary' => 'Offer ',
                'token' => 'e4da3b7fbbce2345d7772b0674a318d5'
>>>>>>> CRUD_Employer_By_ID
=======
                'salary' => 'Offer ',
                'token' => 'e4da3b7fbbce2345d7772b0674a318d5'
>>>>>>> CRUD_Job_By_Emloy_id
=======
                'salary' => 'Offer ',
                'token' => 'e4da3b7fbbce2345d7772b0674a318d5'
>>>>>>> RUEmployer_By_ID
=======
                'salary' => 'Offer ',
                'token' => 'e4da3b7fbbce2345d7772b0674a318d5'
>>>>>>> origin/change_password_employer
=======
                'skill' => 'PHP, Laravel, Back-End',
                'required' => 'Tạo phân quyền nhóm người sử dụng vào hệ thống ứng dụng CoreBanking; và một số hệ thống quản trị ngoài Corebanking',
                'salary' => 'Offer ',
                'token' => 'e4da3b7fbbce2345d7772b0674a318d5'
>>>>>>> origin/detail_page
            ],
            [
                'employer_id' => '6',
                'title' => 'NGÂN HÀNG THƯƠNG MẠI Sacombank',
                'experience' => '5 năm',
                'type' => 'Fulltime',
<<<<<<< HEAD
                'skill' => 'PHP , Laravel, Back-End',
                'required' => 'Tạo phân quyền nhóm người sử dụng vào hệ thống ứng dụng CoreBanking; và một số hệ thống quản trị ngoài Corebanking',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'salary' => 'Offer '
=======
                'salary' => 'Offer ',
                'token' => '1679091c5a880faf6fb5e6087eb1b2dc'
>>>>>>> CRUD_Employer_By_ID
=======
                'salary' => 'Offer ',
                'token' => '1679091c5a880faf6fb5e6087eb1b2dc'
>>>>>>> CRUD_Job_By_Emloy_id
=======
                'salary' => 'Offer ',
                'token' => '1679091c5a880faf6fb5e6087eb1b2dc'
>>>>>>> RUEmployer_By_ID
=======
                'salary' => 'Offer ',
                'token' => '1679091c5a880faf6fb5e6087eb1b2dc'
>>>>>>> origin/change_password_employer
=======
                'skill' => 'PHP, Laravel, Back-End',
                'required' => 'Tạo phân quyền nhóm người sử dụng vào hệ thống ứng dụng CoreBanking; và một số hệ thống quản trị ngoài Corebanking',
                'salary' => 'Offer ',
                'token' => '1679091c5a880faf6fb5e6087eb1b2dc'
>>>>>>> origin/detail_page
            ],
            [
                'employer_id' => '7',
                'title' => 'NGÂN HÀNG THƯƠNG MẠI VIB',
                'experience' => '5 năm',
                'type' => 'Fulltime',
<<<<<<< HEAD
                'skill' => 'PHP , Laravel, Back-End',
                'required' => 'Tạo phân quyền nhóm người sử dụng vào hệ thống ứng dụng CoreBanking; và một số hệ thống quản trị ngoài Corebanking',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'salary' => 'Offer '
=======
                'salary' => 'Offer ',
                'token' => '8f14e45fceea167a5a36dedd4bea2543'
>>>>>>> CRUD_Employer_By_ID
=======
                'salary' => 'Offer ',
                'token' => '8f14e45fceea167a5a36dedd4bea2543'
>>>>>>> CRUD_Job_By_Emloy_id
=======
                'salary' => 'Offer ',
                'token' => '8f14e45fceea167a5a36dedd4bea2543'
>>>>>>> RUEmployer_By_ID
=======
            5+ years of professional experience in building Web Applications using PHP Laravel; MySQL,
            Sound knowledge of Frontend Technologies including HTML5, JavaScript; CSS3',
                'salary' => 'Offer '
>>>>>>> blog_home
=======
                'salary' => 'Offer ',
                'token' => '8f14e45fceea167a5a36dedd4bea2543'
>>>>>>> origin/change_password_employer
=======
                'skill' => 'PHP, Laravel, Back-End',
                'required' => 'Tạo phân quyền nhóm người sử dụng vào hệ thống ứng dụng CoreBanking; và một số hệ thống quản trị ngoài Corebanking',
                'salary' => 'Offer ',
                'token' => '8f14e45fceea167a5a36dedd4bea2543'
>>>>>>> origin/detail_page
            ]
        ]);
    }
}
