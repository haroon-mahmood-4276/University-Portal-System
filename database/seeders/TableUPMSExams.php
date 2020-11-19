<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableUPMSExams extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('upms_exams')->insert([
            [
                'EXAM_ID' => '01',
                'EXAM_Name' => 'Quiz'
            ],
            [
                'EXAM_ID' => '02',
                'EXAM_Name' => 'Mids'
            ],
            [
                'EXAM_ID' => '03',
                'EXAM_Name' => 'Finals'
            ]
        ]);
    }
}
