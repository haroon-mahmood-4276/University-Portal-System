<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUpmsRoadmap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upms_roadmap', function (Blueprint $table) {
            $table->string('RM_CourseCode', 10);
            $table->string('RM_CourseName', 50)->nullable();
            $table->string('RM_CourseType', 50)->nullable();
            $table->integer('RM_CreditHr')->nullable();
            $table->integer('RM_Semester')->nullable();
            $table->increments('RM_PKID');
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
        Schema::dropIfExists('upms_roadmap');
    }
}
