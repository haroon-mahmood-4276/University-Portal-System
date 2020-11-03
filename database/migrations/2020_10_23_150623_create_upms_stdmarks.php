<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->string('SM_RMCourseCode', 10)->nullable();
            $table->string('SM_PRGPCode', 3)->nullable();
            $table->string('SM_PRGSCode', 2)->nullable();
            $table->string('SM_Date', 15)->nullable();
            $table->string('SM_TotalMarks', 3)->nullable();
            $table->string('SM_ObtainedMarks', 3)->nullable();
            $table->increments('SM_PKID');
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
        Schema::dropIfExists('upms_stdmarks');
    }
}
