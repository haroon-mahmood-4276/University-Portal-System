<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableUPMSSchools extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('upms_schools')->insert([
            'SCL_SchoolCode' => '01',
            'SCL_SchoolName' => 'School of Professional Advancement',
            'SCL_SchoolAbb' => 'SPA',
        ]);

        DB::table('upms_schools')->insert([
            'SCL_SchoolCode' => '02',
            'SCL_SchoolName' => 'School of System and Technology',
            'SCL_SchoolAbb' => 'SST',
        ]);
    }
}
