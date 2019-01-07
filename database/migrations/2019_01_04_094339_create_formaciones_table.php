<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formaciones', function (Blueprint $table) {
            $table->increments('id_formaciones');
            $table->string('ciclo_formativo',125);
            $table->string('centro',125);
            $table->string('titulo',100);
            $table->date('anio');
            $table->integer('id_alumno')->unsigned();
            $table->foreign('id_alumno')->references('id_alumno')->on('alumnos');
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
        Schema::dropIfExists('formaciones');
    }
}
