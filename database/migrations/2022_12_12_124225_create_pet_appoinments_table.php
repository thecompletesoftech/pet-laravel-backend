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
        Schema::create('pet_appoinments', function (Blueprint $table) {
            $table->increments('appoinment_id');
            $table->integer('user_id');
            $table->integer('hostel_id');
            $table->string('pet_type');
            $table->string('date_time');
            $table->integer('transaction_id');
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
        Schema::dropIfExists('pet_appoinments');
    }
};
