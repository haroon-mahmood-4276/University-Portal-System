<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class TableUPMSTeachers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('upms_teacher')->insert([
            'TCHR_ID' => 't2019027012',
            'TCHR_Password' => Crypt::encrypt('123456'),
            'TCHR_FirstName' => 'Haroon',
            'TCHR_LastName' => 'Mahmood',
            'TCHR_PhoneNo' => '1111-1111111',
            'TCHR_CNIC' => '11111-1111111-1',
            'TCHR_Address' => 'Lhr',
            'TCHR_Email' => 'Teacher@uniportal.edu.pk',
            'TCHR_Gender' => 'Male',
            'TCHR_CCCntryCode' => '001',
            'TCHR_CCCityCode' => '001',
            'TCHR_CCCntryCode' => '001',
            'TCHR_Specialty' => 'Computer Sciences',
            'TCHR_PRGPCode' => '001',
            'TCHR_PRGSCode' => '01',
            'TCHR_SCLSchoolCode' => '01',
            'TCHR_Post' => 'Lecturar'
        ]);
    }
}
