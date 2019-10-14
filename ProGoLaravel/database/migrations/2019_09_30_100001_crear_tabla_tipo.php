<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTipo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            // Definicion de las columnas
            $table->bigIncrements('typeID');
            $table->string('typeName',50);
            $table->timestamps();
            // Restricciones de la tabla
            //$table->primary('typeID');
            $table->unique('typeName');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo');
    }
}
