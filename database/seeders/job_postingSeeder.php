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
                'skill' => 'Java , Full-Stack, Sping, Jee',
                'required' => 'Experience with Agile Scrum, Experience with Ember or other JavaScript, Familiarity with build tools such as Ant, Maven, and Gradle',
                'salary' => '2000'
            ], [
                'employer_id' => '2',
                'title' => '[All Levels/Fresher] Software engineers (SalesForce/Apex/Java)',
                'experience' => 'Mới ra trường, All Levels',
                'type' => 'Fulltime',
                'skill' => 'Java , Salesforce, Software Engineer',
                'required' => 'Software engineers have bachelor degree in relevant field, from 0 up to 2 years of work experience ,
            Familiar with Salesforce Apex programming language or JAVA, C++, .Net, 
            Good mindset, ability to multi-task, prioritize, and manage time effectively',
                'salary' => '5** - 2***'
            ], [
                'employer_id' => '3',
                'title' => 'Sr. Back-end Developer (PHP/Laravel)',
                'experience' => '5 năm',
                'type' => 'Fulltime',
                'skill' => 'PHP , Laravel, Back-End',
                'required' => 'Bachelor’s Degree in Computer Science, Information Technology or related field ,
            5+ years of professional experience in building Web Applications using PHP Laravel; MySQL, 
            Sound knowledge of Frontend Technologies including HTML5, JavaScript; CSS3',
                'salary' => 'Offer '
            ], [
                'employer_id' => '4',
                'title' => 'NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN BƯU ĐIỆN LIÊN VIỆT',
                'experience' => '5 năm',
                'type' => 'Fulltime',
                'skill' => 'PHP , Laravel, Back-End',
                'required' => 'Tạo phân quyền nhóm người sử dụng vào hệ thống ứng dụng CoreBanking; và một số hệ thống quản trị ngoài Corebanking',
                'salary' => 'Offer '
            ], [
                'employer_id' => '5',
                'title' => 'Working at Korean IT Companies in VietNam',
                'experience' => '5 năm',
                'type' => 'Fulltime',
                'skill' => 'PHP , Laravel, Back-End',
                'required' => 'Team Leader has 5+ years experience of web developer and experience in a Leader position',
                'salary' => 'Offer '
            ], [
                'employer_id' => '6',
                'title' => 'TAPTAP QC Fresher 2022',
                'experience' => '5 năm',
                'type' => 'Fulltime',
                'skill' => 'Kiến thức nền tảng về software testing và ISTQB, Mobile App Testing, Web App Testing, API Testing',
                'required' => 'TAPTAP QC Fresher 2022 là chương trình tuyển dụng & đào tạo những tài năng trẻ, năng động, ham học hỏi để “khai phá” tiềm năng, “nâng cấp” chuyên môn của mình.',
                'salary' => '8.000.000  '
            ], [
                'employer_id' => '7',
                'title' => '[Team leader/Senior/Junior] Salesforce Solutions Architect',
                'experience' => '5 năm',
                'type' => 'Fulltime',
                'skill' => 'Aventra is a global IT consulting and IT services company with leading capabilities in digital transformation, cloud & Big data.',
                'required' => 'About Aventra: Aventra is a global IT consulting and IT services company with leading capabilities in digital transformation, cloud & Big data. It is fast paced growing scale up company having offices in Malaysia, Singapore, India, and UAE.',
                'salary' => '900 USD to 3.000 USD  '
            ]
        ]);
    }
}