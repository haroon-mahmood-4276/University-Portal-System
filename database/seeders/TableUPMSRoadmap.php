<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;

class TableUPMSRoadmap extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('upms_roadmap')->insert([
            [
                'RM_CourseCode' => 'XC-350',
                'RM_CourseName' => 'Introduction to Computer Programming',
                'RM_CourseType' => 'Core Course',
                'RM_CreditHr' => 3,
                'RM_Semester' => 1
            ],
            [
                'RM_CourseCode' => 'XC-355',
                'RM_CourseName' => 'Database Systems',
                'RM_CourseType' => 'Core Course',
                'RM_CreditHr' => 3,
                'RM_Semester' => 1
            ],
            [
                'RM_CourseCode' => 'XC-360',
                'RM_CourseName' => 'Computer Networks',
                'RM_CourseType' => 'Core Course',
                'RM_CreditHr' => 3,
                'RM_Semester' => 1
            ],
            [
                'RM_CourseCode' => 'XC-370',
                'RM_CourseName' => 'Digital Logic Design',
                'RM_CourseType' => 'Core Course',
                'RM_CreditHr' => 3,
                'RM_Semester' => 1
            ],
            [
                'RM_CourseCode' => 'XC-375',
                'RM_CourseName' => 'English Comprehension',
                'RM_CourseType' => 'Core Course',
                'RM_CreditHr' => 3,
                'RM_Semester' => 1
            ],
            [
                'RM_CourseCode' => 'XC-421',
                'RM_CourseName' => 'Object Oriented Programming',
                'RM_CourseType' => 'Core Course',
                'RM_CreditHr' => 3,
                'RM_Semester' => 1
            ],
            [
                'RM_CourseCode' => 'XC-365',
                'RM_CourseName' => 'Software Engineering',
                'RM_CourseType' => 'Core Course',
                'RM_CreditHr' => 3,
                'RM_Semester' => 2
            ],
            [
                'RM_CourseCode' => 'XC-435',
                'RM_CourseName' => 'Computer Organization and Architecture',
                'RM_CourseType' => 'Core Course',
                'RM_CreditHr' => 3,
                'RM_Semester' => 2
            ],
            [
                'RM_CourseCode' => 'XC-380',
                'RM_CourseName' => 'Algorithm Analysis and Design',
                'RM_CourseType' => 'Core Course',
                'RM_CreditHr' => 3,
                'RM_Semester' => 2
            ],
            [
                'RM_CourseCode' => 'XC-385',
                'RM_CourseName' => 'Web Programming',
                'RM_CourseType' => 'Core Course',
                'RM_CreditHr' => 3,
                'RM_Semester' => 2
            ],
            [
                'RM_CourseCode' => 'XC-460',
                'RM_CourseName' => 'Software Quality Assurance',
                'RM_CourseType' => 'Elective Course',
                'RM_CreditHr' => 3,
                'RM_Semester' => 3
            ],
            [
                'RM_CourseCode' => 'XC-445',
                'RM_CourseName' => 'Data and File Structure',
                'RM_CourseType' => 'Core Course',
                'RM_CreditHr' => 3,
                'RM_Semester' => 3
            ],
            [
                'RM_CourseCode' => 'XC-451',
                'RM_CourseName' => 'Theory of Automata',
                'RM_CourseType' => 'Core Course',
                'RM_CreditHr' => 3,
                'RM_Semester' => 3
            ],
            [
                'RM_CourseCode' => 'XC-430',
                'RM_CourseName' => 'Operating Systems',
                'RM_CourseType' => 'Core Course',
                'RM_CreditHr' => 3,
                'RM_Semester' => 3
            ],
            [
                'RM_CourseCode' => 'XC-475',
                'RM_CourseName' => 'Advance Web Programming',
                'RM_CourseType' => 'Core Course',
                'RM_CreditHr' => 3,
                'RM_Semester' => 3
            ],
            [
                'RM_CourseCode' => 'XC-450',
                'RM_CourseName' => 'Distributed Database Systems',
                'RM_CourseType' => 'Elective Course',
                'RM_CreditHr' => 3,
                'RM_Semester' => 4
            ],
            [
                'RM_CourseCode' => 'XC-455',
                'RM_CourseName' => 'Android Application Development',
                'RM_CourseType' => 'Elective Course',
                'RM_CreditHr' => 3,
                'RM_Semester' => 4
            ],
            [
                'RM_CourseCode' => 'XC-470',
                'RM_CourseName' => 'Data Mining',
                'RM_CourseType' => 'Elective Course',
                'RM_CreditHr' => 3,
                'RM_Semester' => 4
            ],
            [
                'RM_CourseCode' => 'XC-492',
                'RM_CourseName' => 'Advance Object Oriented Programming',
                'RM_CourseType' => 'Elective Course',
                'RM_CreditHr' => 3,
                'RM_Semester' => 4
            ],
            [
                'RM_CourseCode' => 'XC-490',
                'RM_CourseName' => 'Advance Software Development Techniques',
                'RM_CourseType' => 'Elective Course',
                'RM_CreditHr' => 3,
                'RM_Semester' => 4
            ],
            [
                'RM_CourseCode' => 'XI-499',
                'RM_CourseName' => 'Final Project',
                'RM_CourseType' => 'Project',
                'RM_CreditHr' => 6,
                'RM_Semester' => 4
            ]
        ]);
    }
}
