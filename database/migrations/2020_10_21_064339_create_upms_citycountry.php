<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpmsCitycountry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upms_citycountry', function (Blueprint $table) {
            $table->string('CC_CntryCode', 5);
            $table->string('CC_CntryName', 50);
            $table->string('CC_CityCode', 5);
            $table->string('CC_CityName', 50);
            $table->integer('CC_PKID')->unique();
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
        Schema::dropIfExists('upms_citycountry');
    }
}
