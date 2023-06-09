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
        Schema::create('dogWalkers', function (Blueprint $table) {
            $table->id();
            $table->string("Identity");
            $table->string("name");
            $table->string("phone");
            $table->unsignedBigInteger("id_person");
            $table->timestamps();

            $table->foreign('id_person')->references('id')->on('persons');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('dogWalkers');
    }
};
