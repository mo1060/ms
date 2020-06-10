<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProbandenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('probanden', function (Blueprint $table) {

            $table->id();
            $table->timestamps();
            $table->string('age');
            $table->string('gender'); 
            $table->json('grill'); 
            $table->json('standmixer'); 
            $table->json('schrank'); 
            $table->json('staender'); 
            $table->json('waschmaschine'); 
            $table->json('bett'); 
            $table->json('pooltable'); 
            $table->json('lampe'); 
            $table->json('zelt'); 
            $table->json('wohnzimmertisch'); 
            $table->json('federballset'); 
            $table->json('campingtisch'); 
            $table->json('beamer');
            $table->json('gummistiefel'); 
            $table->json('koffer'); 
            $table->json('pcset'); 
            $table->json('stuhl'); 
            $table->json('teppich'); 
            $table->json('tischtennisplatte'); 
            $table->json('staubsauger'); 
            $table->json('pflanze');


        });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('probanden');
    }
}
