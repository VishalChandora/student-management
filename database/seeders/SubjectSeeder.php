<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subject = [
            ['code' => 'USIT101', 'type' => 'Core Subject', 'name' => 'Imperative Programming'],
            ['code' => 'USIT102', 'type' => 'Core Subject', 'name' => 'Digital Electronics'],
            ['code' => 'USIT103', 'type' => 'Core Subject', 'name' => 'Operating Systems'],
            ['code' => 'USIT104', 'type' => 'Core Subject', 'name' => 'Discrete Mathematics'],
            ['code' => 'USIT201', 'type' => 'Core Subject', 'name' => 'Object oriented Programming'],
            ['code' => 'USIT202', 'type' => 'Core Subject', 'name' => 'Microprocessor Architecture'],
            ['code' => 'USIT203', 'type' => 'Core Subject', 'name' => 'Web Programming'],
            ['code' => 'USIT204', 'type' => 'Core Subject', 'name' => 'Numerical and Statistical Methods'],
            ['code' => 'USIT1P1', 'type' => 'Core Subject Practical', 'name' => 'Imperative Programming Practical'],
            ['code' => 'USIT1P2', 'type' => 'Core Subject Practical', 'name' => 'Digital Electronics Practical'],
            ['code' => 'USIT1P3', 'type' => 'Core Subject Practical', 'name' => 'Operating Systems Practical'],
            ['code' => 'USIT1P4', 'type' => 'Core Subject Practical', 'name' => 'Discrete Mathematics Practical'],
            ['code' => 'USIT2P1', 'type' => 'Core Subject Practical', 'name' => 'Object oriented Programming Practical'],
            ['code' => 'USIT2P2', 'type' => 'Core Subject Practical', 'name' => 'Microprocessor Architecture Practical'],
            ['code' => 'USIT2P3', 'type' => 'Core Subject Practical', 'name' => 'Web Programming Practical'],
            ['code' => 'USIT2P4', 'type' => 'Core Subject Practical', 'name' => 'Numerical and Statistical Methods Practical'],
            ['code' => 'USIT205', 'type' => 'Ability Enhancement Skill Course',	 'name' => 'Green Computing'],
            ['code' => 'USIT105', 'type' => 'Ability Enhancement Skill Course',	 'name' => 'Communication Skills'],
            ['code' => 'USIT1P5', 'type' => 'Ability Enhancement Skill Course Practical', 'name' => 'Communication Skills Practical'],
            ['code' => 'USIT2P5', 'type' => 'Ability Enhancement Skill Course Practical', 'name' => 'Green Computing Practical'],
            ['code' => 'USIT302', 'type' => 'Core Subject', 'name' => 'Data Structures'],
            ['code' => 'USIT303', 'type' => 'Core Subject', 'name' => 'Computer Networks'],
            ['code' => 'USIT304', 'type' => 'Core Subject', 'name' => 'Database Management Systems'],
            ['code' => 'USIT305', 'type' => 'Core Subject', 'name' => 'Applied Mathematics'],
            ['code' => 'USIT402', 'type' => 'Core Subject', 'name' => 'Introduction to Embedded Systems'],
            ['code' => 'USIT403', 'type' => 'Core Subject', 'name' => 'Computer Oriented Statistical Techniques'],
            ['code' => 'USIT404', 'type' => 'Core Subject', 'name' => 'Software Engineering'],
            ['code' => 'USIT405', 'type' => 'Core Subject', 'name' => 'Computer Graphics and Animation'],
            ['code' => 'USIT301', 'type' => 'Skill Enhancement Course', 'name' => 'Python Programming'],
            ['code' => 'USIT401', 'type' => 'Skill Enhancement Course', 'name' => 'Core Java'],    
            ['code' => 'USIT3P1', 'type' => 'Skill Enhancement Course Practical', 'name' =>	'Python Programming Practical'],	
            ['code' => 'USIT4P1', 'type' => 'Skill Enhancement Course Practical', 'name' =>	'Core Java Practical'],	
            ['code' => 'USIT3P3', 'type' =>	'Core Subject Practical', 'name' =>	'Computer Networks Practical'],
            ['code' => 'USIT3P4', 'type' =>	'Core Subject Practical', 'name' =>	'Database Management Systems Practical'],
            ['code' => 'USIT3P5', 'type' =>	'Core Subject Practical', 'name' =>	'Mobile Programming Practical'],
            ['code' => 'USIT3P2', 'type' =>	'Core Subject Practical', 'name' =>	'Data Structures Practical'],
            ['code' => 'USIT4P2', 'type' =>	'Core Subject Practical', 'name' =>	'Introduction to Embedded Systems Practical'],
            ['code' => 'USIT4P3', 'type' =>	'Core Subject Practical', 'name' =>	'Computer Oriented Statistical Techniques Practical'],
            ['code' => 'USIT4P4', 'type' =>	'Core Subject Practical', 'name' =>	'Software Engineering Practical'],
            ['code' => 'USIT4P5', 'type' =>	'Core Subject Practical', 'name' =>	'Computer Graphics and Animation Practical'],
            ['code' => 'USIT501', 'type' => 'Skill Enhancement Course', 'name' => 'Software Project Management'],
            ['code' => 'USIT502', 'type' => 'Skill Enhancement Course', 'name' => 'Internet of Things'],
            ['code' => 'USIT503', 'type' => 'Skill Enhancement Course', 'name' => 'Advanced Web Programming'],
            ['code' => 'USIT601', 'type' => 'Skill Enhancement Course', 'name' => 'Software Quality Assurance'],
            ['code' => 'USIT602', 'type' => 'Skill Enhancement Course', 'name' => 'Security in Computing'],
            ['code' => 'USIT603', 'type' => 'Skill Enhancement Course', 'name' => 'Business Intelligence'],
            ['code' => 'USIT5P1', 'type' => 'Skill Enhancement Course Practical', 'name' => 'Project Dissertation'],
            ['code' => 'USIT5P2', 'type' => 'Skill Enhancement Course Practical', 'name' => 'Internet of Things Practical'],
            ['code' => 'USIT5P3', 'type' => 'Skill Enhancement Course Practical', 'name' => 'Advanced Web Programming Practical'],
            ['code' => 'USIT6P1', 'type' => 'Skill Enhancement Course Practical', 'name' => 'Project Implementation'],
            ['code' => 'USIT6P2', 'type' => 'Skill Enhancement Course Practical', 'name' => 'Security in Computing Practical'],
            ['code' => 'USIT6P3', 'type' => 'Skill Enhancement Course Practical', 'name' => 'Business Intelligence Practical'],
            ['code' => 'USIT6P5', 'type' => 'Skill Enhancement Course Practical', 'name' => 'Advanced Mobile Programming'],
            ['code' => 'USIT5P4', 'type' => 'Discipline Specific Elective Practical', 'name' => 'Linux Administration Practical'],
            ['code' => 'USIT5P5', 'type' => 'Discipline Specific Elective Practical', 'name' => 'Enterprise Java Practical'],
            ['code' => 'USIT6P4', 'type' => 'Discipline Specific Elective Practical', 'name' => 'Principles of Geographic Information Systems Practical'],
            ['code' => 'USIT604', 'type' => 'Discipline Specific Elective', 'name' =>  'Principles of Geographic Information Systems'],
            ['code' => 'USIT605', 'type' => 'Discipline Specific Elective', 'name' =>  'IT Service Management'],
            ['code' => 'USIT504', 'type' => 'Discipline Specific Elective', 'name' =>  'Linux System Administration'],
            ['code' => 'USIT505', 'type' => 'Discipline Specific Elective', 'name' =>  'Enterprise Java'],
            
        ];

        DB::table('subjects')->insertOrIgnore($subject);
    }
}
