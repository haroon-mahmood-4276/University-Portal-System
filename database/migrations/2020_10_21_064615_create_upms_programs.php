<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpmsPrograms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upms_programs', function (Blueprint $table) {
            $table->string('PRG_PCode', 5);
            $table->string('PRG_ProgramName', 50)->nullable();
            $table->string('PRG_SCode', 5);
            $table->string('PRG_SectionName', 50)->nullable();
            $table->integer('PRG_TotalSemester')->nullable();
            $table->integer('PRG_TotalCreditHrs')->nullable();
            $table->integer('PRG_PKID')->unique();
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
        Schema::dropIfExists('upms_programs');
    }
}
