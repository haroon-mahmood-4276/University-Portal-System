<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
class TableUPMSAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('upms_admin')->insert([
            'ADMIN_ID' => 'a2019027012',
            'ADMIN_Password' => Crypt::encrypt('123456'),
            'ADMIN_FirstName' => 'Haroon',
            'ADMIN_LastName' => 'Mahmood',
            'ADMIN_PhoneNo' => '1111-1111111',
            'ADMIN_CNIC' => '11111-1111111-1',
            'ADMIN_Address' => 'Lhr',
            'ADMIN_Email' => 'Admin@uniportal.edu.pk',
            'ADMIN_Gender' => 'Male',
            'ADMIN_CCCntryCode' => '001',
            'ADMIN_CCCityCode' => '001'
        ]);
    }
}
