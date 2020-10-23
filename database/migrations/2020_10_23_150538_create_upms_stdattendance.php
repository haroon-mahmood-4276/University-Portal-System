<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpmsStdattendance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upms_stdattendance', function (Blueprint $table) {
            $table->string('SA_STDRollNo', 11);
            $table->string('SA_RMCourseCode', 5)->nullable();
            $table->string('SA_STDPPCode', 5)->nullable();
            $table->string('SA_STDPSCode', 5)->nullable();
            $table->string('SA_Date', 15)->nullable();
            $table->string('SA_StartTime', 15)->nullable();
            $table->string('SA_EndTime', 15)->nullable();
            $table->string('SA_Status', 1)->nullable();
            $table->integer('SA_PKID')->unique();
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
        Schema::dropIfExists('upms_stdattendance');
    }
}
