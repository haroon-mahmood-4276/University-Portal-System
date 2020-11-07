<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


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
            $table->string('TCHR_Password', 1500)->nullable();
            $table->string('TCHR_FirstName', 50)->nullable();
            $table->string('TCHR_LastName', 50)->nullable();
            $table->string('TCHR_CNIC', 15)->nullable();
            $table->string('TCHR_PhoneNo', 12)->nullable();
            $table->string('TCHR_Email', 50)->nullable();
            $table->string('TCHR_Gender', 6)->nullable();
            $table->string('TCHR_Specialty', 50)->nullable();
            $table->string('TCHR_PRGPCode', 3)->nullable();
            $table->string('TCHR_PRGSCode', 2)->nullable();
            $table->string('TCHR_CCCityCode', 3)->nullable();
            $table->string('TCHR_CCCntryCode', 3)->nullable();
            $table->string('TCHR_Address', 160)->nullable();
            $table->string('TCHR_SCLSchoolCode', 2)->nullable();
            $table->string('TCHR_Post', 50)->nullable();
            $table->string('TCHR_Picture', 150)->nullable();
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
        Schema::dropIfExists('upms_teacher');
    }
}
