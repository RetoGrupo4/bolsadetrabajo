<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->increments('id_inscripciones');
            $table->date('fecha');
            $table->integer('id_alumno')->unsigned();
            $table->integer('id_oferta')->unsigned();
            $table->foreign('id_alumno')->references('id_alumno')->on('alumnos');
            $table->foreign('id_oferta')->references('id_ofertas')->on('ofertas');
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
        Schema::dropIfExists('inscripciones');
    }
}
