<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id_alumno');
            $table->string('dni',9)->unique();
            $table->string('apellidos',75);
            $table->string('nombre',50);
            $table->string('direccion',50);
            $table->string('localidad',30);
            $table->string('codigo_postal',5);
            $table->string('nacionalidad',30);
            $table->string('sexo',1);
            $table->string('password',40);
            $table->string('email',125)->unique();
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
        Schema::dropIfExists('alumnos');
    }
}
