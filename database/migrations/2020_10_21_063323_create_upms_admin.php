<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUpmsAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upms_admin', function (Blueprint $table) {
            $table->string('ADMIN_ID', 11);
            $table->string('ADMIN_Password', 100)->nullable();
            $table->string('ADMIN_FirstName', 50)->nullable();
            $table->string('ADMIN_LastName', 50)->nullable();
            $table->string('ADMIN_PhoneNo', 12)->nullable();
            $table->string('ADMIN_CNIC', 15)->nullable();
            $table->string('ADMIN_Address', 150)->nullable();
            $table->string('ADMIN_Email', 50)->nullable();
            $table->string('ADMIN_Gender', 6)->nullable();
            $table->string('ADMIN_CCCntryCode', 3)->nullable();
            $table->string('ADMIN_CCCityCode', 3)->nullable();
            $table->string('ADMIN_Picture', 150)->nullable();
            $table->increments('ADMIN_PKID');
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
        Schema::dropIfExists('upms_admin');
    }
}
