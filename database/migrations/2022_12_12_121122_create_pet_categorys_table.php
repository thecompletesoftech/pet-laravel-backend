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
        Schema::create('pet_categorys', function (Blueprint $table) {
            $table->increments('pet_id');
            $table->string('pet_type');
            $table->string('pet_no_of_set');
            $table->integer('hostel_id');
            $table->string('hostel_hourly_fees');
            $table->string('hostel_fullday_fees');
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
        Schema::dropIfExists('pet_categorys');
    }
};
