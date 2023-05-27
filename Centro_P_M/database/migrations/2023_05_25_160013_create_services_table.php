<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('services',function(Blueprint $table){
            $table->unsignedBigInteger("id_pet");
            $table->unsignedBigInteger("id_dogwalker");
            $table->unsignedBigInteger("id_place");
            $table->string('Date');

            $table->foreign('id_pet')->references('id')->on('pets');
            $table->foreign('id_dogwalker')->references('id')->on('dogWalkers');
            $table->foreign('id_place')->references('id')->on('places');
        });
    }

    public function down()
    {
        Schema::dropIfExists('services');
    }
};
