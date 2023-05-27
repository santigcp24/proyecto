<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('Identy');
            $table->string('email');
            $table->string('phone');
            $table->string('address');

            $table -> timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('persons');
    }
};
