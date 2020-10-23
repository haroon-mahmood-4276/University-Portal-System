<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpmsSchools extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upms_schools', function (Blueprint $table) {
            $table->string('SCL_SchoolCode', 5);
            $table->string('SCL_SchoolName', 50)->nullable();
            $table->string('SCL_SchoolAbb', 5)->nullable();
            $table->integer('SCL_PKID')->unique();
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
        Schema::dropIfExists('upms_schools');
    }
}
