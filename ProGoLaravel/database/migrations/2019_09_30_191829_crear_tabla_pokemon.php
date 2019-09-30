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
            $table->integer('pokedex');
            $table->string('name',50);
            $table->string('description',255);
            $table->integer('type');
            $table->string('height',20);
            $table->string('weight',20);
            $table->string('sex',20);
            $table->integer('preEvolution');
            $table->integer('evolution');
            $table->integer('region');
            $table->string('image',50);
            $table->boolean('activeGo');
            $table->boolean('activeShiny');
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
        Schema::dropIfExists('pokemon');
    }
}
