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
        DB::table('job_posting')->insert([[
            'employer_id' => '1',
            'title' => 'Full-Stack Java Software Engineer (JEE/ Spring/ Hibernate) | Up to $2000',
            'experience' => '1 năm', 
            'type' => 'Fulltime',
            'skill' => 'Java , Full-Stack, Sping, Jee',
            'required' => 'Experience with Agile Scrum, Experience with Ember or other JavaScript, Familiarity with build tools such as Ant, Maven, and Gradle',
            'salary' => '2000'
        ],[
            'employer_id' => '2',
            'title' => '[All Levels/Fresher] Software engineers (SalesForce/Apex/Java)',
            'experience' => 'Mới ra trường, All Levels', 
            'type' => 'Fulltime',
            'skill' => 'Java , Salesforce, Software Engineer',
            'required' => 'Software engineers have bachelor degree in relevant field, from 0 up to 2 years of work experience ,
            Familiar with Salesforce Apex programming language or JAVA, C++, .Net, 
            Good mindset, ability to multi-task, prioritize, and manage time effectively',
            'salary' => '5** - 2***'
        ],[
            'employer_id' => '3',
            'title' => 'Sr. Back-end Developer (PHP/Laravel)',
            'experience' => '5 năm', 
            'type' => 'Fulltime',
            'skill' => 'PHP , Laravel, Back-End',
            'required' => 'Bachelor’s Degree in Computer Science, Information Technology or related field ,
            5+ years of professional experience in building Web Applications using PHP Laravel; MySQL, 
            Sound knowledge of Frontend Technologies including HTML5, JavaScript; CSS3',
            'salary' => 'Offer '
        ]
    ]);
    }
}
