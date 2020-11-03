<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use League\CommonMark\Extension\Table\Table;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TableUPMSAdmin::class,
            TableUPMSCityCountry::class,
            TableUPMSRoadmap::class,
            TableUPMSPrograms::class,
            TableUPMSCityCountry::class,
            TableUPMSSchools::class,
            TableUPMSStudents::class,
            TableUPMSTeachers::class
        ]);
    }
}
