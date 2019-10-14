<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRegion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('region', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            // Definicion de las columnas
            $table->bigIncrements('regionID');
            $table->string('regionName',50);
            $table->timestamps();
            // Restricciones de la tabla
            //$table->primary('regionID');
            $table->unique('regionName');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('region');
    }
}
