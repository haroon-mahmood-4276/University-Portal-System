<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->string('PRG_PCode', 3);
            $table->string('PRG_ProgramName', 50)->nullable();
            $table->string('PRG_SCode', 2);
            $table->string('PRG_SectionName', 50)->nullable();
            $table->string('PRG_SCLSchoolCode', 2)->nullable();
            $table->integer('PRG_TotalSemester')->nullable();
            $table->integer('PRG_TotalCreditHrs')->nullable();
            $table->increments('PRG_PKID');
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
        Schema::dropIfExists('upms_programs');
    }
}
