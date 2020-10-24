<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableUPMSPrograms extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('upms_programs')->insert([
            'PRG_PCode' => '001',
            'PRG_ProgramName' => 'MCS',
            'PRG_SCode' => '01',
            'PRG_SectionName' => 'A',
            'PRG_SCLSchoolCode' => '01',
            'PRG_TotalSemester' => '4',
            'PRG_TotalCreditHrs' => '166'
        ]);

        DB::table('upms_programs')->insert([
            'PRG_PCode' => '002',
            'PRG_ProgramName' => 'MIT',
            'PRG_SCode' => '01',
            'PRG_SectionName' => 'A',
            'PRG_SCLSchoolCode' => '01',
            'PRG_TotalSemester' => '4',
            'PRG_TotalCreditHrs' => '166'
        ]);
    }
}
