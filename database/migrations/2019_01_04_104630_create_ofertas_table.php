<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->increments('id_ofertas');
            $table->string('experiencia',20);
            $table->text('requisitos');
            $table->string('contrato',50);
            $table->string('puesto',125);
            $table->string('localidad',75);
            $table->text('observaciones');
            $table->integer('id_empresa')->unsigned();
            $table->integer('id_departamento')->unsigned();
            $table->integer('id_administrador')->unsigned();
            $table->foreign('id_empresa')->references('id_empresas')->on('empresas');
            $table->foreign('id_departamento')->references('id_departamentos')->on('departamentos');
            $table->foreign('id_administrador')->references('id_administradores')->on('administradores');
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
        Schema::dropIfExists('ofertas');
    }
}
