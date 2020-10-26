<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableUPMSCityCountry extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('upms_citycountry')->insert([
            [
                'CC_CntryCode' => '001',
                'CC_CntryName' => 'Pakistan',
                'CC_CityCode' => '001',
                'CC_CityName' => 'Lahore'

            ],
            [
                'CC_CntryCode' => '001',
                'CC_CntryName' => 'Pakistan',
                'CC_CityCode' => '002',
                'CC_CityName' => 'Multan'
            ],
            [
                'CC_CntryCode' => '001',
                'CC_CntryName' => 'Pakistan',
                'CC_CityCode' => '003',
                'CC_CityName' => 'Karachi'
            ],
            [
                'CC_CntryCode' => '001',
                'CC_CntryName' => 'Pakistan',
                'CC_CityCode' => '004',
                'CC_CityName' => 'Islamabad'
            ],
            [
                'CC_CntryCode' => '001',
                'CC_CntryName' => 'Pakistan',
                'CC_CityCode' => '005',
                'CC_CityName' => 'Faisalabad'
            ]
        ]);
    }
}
