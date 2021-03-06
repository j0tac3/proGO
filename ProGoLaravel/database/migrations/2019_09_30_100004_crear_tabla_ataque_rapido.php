<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAtaqueRapido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ataqueRapido', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            // Definicion de las columnas
            $table->bigIncrements('fastAttackID');
            $table->string('attackName',50);
            $table->bigInteger('attackType')->unsigned();
            $table->integer('danioPVP');
            $table->integer('danioNormal');
            $table->integer('speed');
            $table->timestamps();
            // Restricciones de la tabla
            //$table->primary('fastAttackID');
            $table->foreign('attackType')->references('typeID')->on('tipo');
            $table->unique('attackName');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ataqueRapido');
    }
}
