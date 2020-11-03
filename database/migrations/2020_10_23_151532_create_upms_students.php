<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUpmsStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upms_students', function (Blueprint $table) {
            $table->string('STD_RollNo', 11);
            $table->string('STD_Password', 100)->nullable();
            $table->string('STD_FirstName', 50)->nullable();
            $table->string('STD_LastName', 50)->nullable();
            $table->string('STD_CNIC', 15)->nullable();
            $table->string('STD_STDPPCode', 3)->nullable();
            $table->string('STD_STDPSCode', 2)->nullable();
            $table->string('STD_Address', 150)->nullable();
            $table->string('STD_SCLSchoolCode', 2)->nullable();
            $table->string('STD_PRGPCode', 3)->nullable();
            $table->string('STD_PRGSCode', 2)->nullable();
            $table->string('STD_CrntSemester', 1)->nullable();
            $table->string('STD_PhoneNo', 12)->nullable();
            $table->string('STD_Email', 60)->nullable();
            $table->string('STD_Gender', 6)->nullable();
            $table->string('STD_CCCityCode', 3)->nullable();
            $table->string('STD_CCCntryCode', 3)->nullable();
            $table->string('STD_Picture', 150)->nullable();
            $table->increments('STD_PKID');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('upms_students');
    }
}
