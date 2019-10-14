<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaResistecia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resistencia', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            // Definicion de las tablas
            $table->bigInteger('typeResistent')->unsigned();
            $table->bigInteger('typeWeakness')->unsigned();
            $table->timestamps();
            // Restricciones de la tabla
            $table->primary(['typeResistent','typeWeakness']);
            $table->foreign('typeResistent')->references('typeID')->on('tipo');
            $table->foreign('typeWeakness')->references('typeID')->on('tipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resistencia');
    }
}
