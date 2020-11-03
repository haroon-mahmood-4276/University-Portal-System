<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TableUPMSStudents extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('upms_students')->insert([
            'STD_RollNo' => 'F2019027012',
            'STD_Password' => Hash::make('123456'),
            'STD_FirstName' => 'Haroon',
            'STD_LastName' => 'Mahmood',
            'STD_PhoneNo' => '1111-1111111',
            'STD_CNIC' => '11111-1111111-1',
            'STD_Address' => 'Lhr',
            'STD_Email' => 'Student@uniportal.edu.pk',
            'STD_Gender' => 'Male',
            'STD_CCCntryCode' => '001',
            'STD_CCCityCode' => '001',
            'STD_CrntSemester' => '3',
            'STD_PRGPCode' => '001',
            'STD_PRGSCode' => '01',
            'STD_SCLSchoolCode' => '01'
        ]);
    }
}
