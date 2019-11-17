<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaVentaja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventaja', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            // Definicion de las tablas
            $table->bigInteger('typeAdvantage')->unsigned();
            $table->bigInteger('typeDisavantage')->unsigned();
            $table->integer('damageFor');
            $table->timestamps();
            // Restricciones de la tabla
            $table->primary(['typeAdvantage','typeDisavantage']);
            $table->foreign('typeAdvantage')->references('typeID')->on('tipo');
            $table->foreign('typeDisavantage')->references('typeID')->on('tipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventaja');
    }
}
