<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('userregistrations', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_name');
            $table->string('user_email')->unique();
            $table->string('user_mobile');
            $table->string('user_pass');
            $table->string('user_reg_type');
            $table->timestamps();
        });
    }

 
    public function down()
    {
        Schema::dropIfExists('userregistrations');
    }
};
