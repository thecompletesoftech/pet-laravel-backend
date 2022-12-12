<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_hostels', function (Blueprint $table) {
            $table->increments('hostel_id');
            $table->string('hostel_name');
            $table->integer('hostet_gst_no');
            $table->string('hostel_owner_name');
            $table->string('hostel_address');
            $table->integer('hostel_contact_number');
            $table->string('hostel_about');
            $table->string('hostel_logo');
            $table->string('hostel_photo');
            $table->string('hostel_location');
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
        Schema::dropIfExists('reg_hostels');
    }
};
