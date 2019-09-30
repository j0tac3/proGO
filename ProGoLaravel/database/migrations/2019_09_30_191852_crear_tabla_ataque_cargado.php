<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAtaqueCargado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ataqueCargado', function (Blueprint $table) {
            $table->increments('loadAttackID');
            $table->string('attackName',50);
            $table->integer('attackType');
            $table->integer('danioPVP');
            $table->integer('danioNormal');
            $table->integer('speed');
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
        Schema::dropIfExists('ataqueCargado');
    }
}
