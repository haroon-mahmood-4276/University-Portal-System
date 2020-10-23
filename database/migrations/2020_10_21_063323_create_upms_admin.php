<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('ADMIN_Password', 50)->nullable();
            $table->string('ADMIN_FirstName', 50)->nullable();
            $table->string('ADMIN_LastName', 50)->nullable();
            $table->string('ADMIN_PhoneNo', 12)->nullable();
            $table->string('ADMIN_CNIC', 15)->nullable();
            $table->string('ADMIN_Address', 150)->nullable();
            $table->string('ADMIN_Email', 50)->nullable();
            $table->string('ADMIN_Gender', 6)->nullable();
            $table->string('ADMIN_City', 5)->nullable();
            $table->string('ADMIN_Country', 5)->nullable();
            $table->string('ADMIN_Picture', 150)->nullable();
            $table->integer('ADMIN_PKID')->unique();
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
        Schema::dropIfExists('upms_admin');
    }
}
