<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_client");
            $table->unsignedBigInteger("id_dog_walkers");
            $table->unsignedBigInteger("id_pets");
            $table->unsignedBigInteger("id_place");
            $table->string('date');
            $table->timestamps();

            $table->foreign('id_client')->references('id')->on('clients');
            $table->foreign('id_dog_walkers')->references('id')->on('dog_walkers');
            $table->foreign('id_pets')->references('id')->on('pets');
            $table->foreign('id_place')->references('id')->on('places');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
