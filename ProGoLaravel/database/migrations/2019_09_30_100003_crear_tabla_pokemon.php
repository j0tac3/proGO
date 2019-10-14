<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPokemon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            // Definicio de las columnas
            $table->integer('pokedex');
            $table->string('name',50);
            $table->string('description',255);
            $table->bigInteger('tipo')->unsigned();
            $table->string('height',20);
            $table->string('weight',20);
            $table->enum('sex',['chico','chica','sin']);
            $table->bigInteger('preEvolution')->unsigned();
            $table->bigInteger('evolution')->unsigned();
            $table->bigInteger('region')->unsigned();
            $table->string('image',50);
            $table->boolean('activeGo');
            $table->boolean('activeGoShiny');
            $table->timestamps();
            // Restricciones de la tabla
            //$table->primary('pokedex');
            $table->foreign('tipo')->references('typeID')->on('tipo');
            //$table->foreign('preEvolution')->references('pokedex')->on('pokemon');
            //$table->foreign('evolution')->references('pokedex')->on('pokemon');
            $table->foreign('region')->references('regionID')->on('region');
            $table->unique('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemon');
    }
}
