<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpmsTeacher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upms_teacher', function (Blueprint $table) {
            $table->string('TCHR_ID', 11);
            $table->string('TCHR_Password', 50)->nullable();
            $table->string('TCHR_FirstName', 50)->nullable();
            $table->string('TCHR_LastName', 50)->nullable();
            $table->string('TCHR_CNIC', 15)->nullable();
            $table->string('TCHR_PhoneNo', 12)->nullable();
            $table->string('TCHR_Email', 50)->nullable();
            $table->string('TCHR_Gender', 6)->nullable();
            $table->string('TCHR_Specialty', 50)->nullable();
            $table->string('TCHR_CCCityCode', 5)->nullable();
            $table->string('TCHR_CCCntryCode', 5)->nullable();
            $table->string('TCHR_Address', 160)->nullable();
            $table->string('TCHR_SCLSchoolCode', 2)->nullable();
            $table->string('TCHR_Picture', 150)->nullable();
            $table->integer('STD_PKID')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('upms_teacher');
    }
}
