<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->string('SA_RMCourseCode', 10)->nullable();
            $table->string('SA_STDPPCode', 3)->nullable();
            $table->string('SA_STDPSCode', 2)->nullable();
            $table->string('SA_Date', 15)->nullable();
            $table->string('SA_StartTime', 15)->nullable();
            $table->string('SA_EndTime', 15)->nullable();
            $table->string('SA_Status', 1)->nullable();
            $table->increments('SA_PKID');
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
        Schema::dropIfExists('upms_stdattendance');
    }
}
