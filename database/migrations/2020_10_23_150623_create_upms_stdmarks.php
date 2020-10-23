<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpmsStdmarks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upms_stdmarks', function (Blueprint $table) {
            $table->string('SM_STDRollNo', 11);
            $table->string('SM_ExamType', 10)->nullable();
            $table->string('SM_ExamName', 50)->nullable();
            $table->string('SM_RMCourseCode', 5)->nullable();
            $table->string('SM_STDPPCode', 5)->nullable();
            $table->string('SM_STDPSCode', 5)->nullable();
            $table->string('SM_Date', 15)->nullable();
            $table->string('SM_TotalMarks', 3)->nullable();
            $table->string('SM_ObtainedMarks', 3)->nullable();
            $table->integer('SM_PKID')->unique();
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
        Schema::dropIfExists('upms_stdmarks');
    }
}
