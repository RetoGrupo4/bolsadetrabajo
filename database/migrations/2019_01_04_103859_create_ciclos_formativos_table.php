<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiclosFormativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciclos_formativos', function (Blueprint $table) {
            $table->increments('id_ciclos_formativos');
            $table->string('ciclo_formativo',125);
            $table->integer('id_departamento')->unsigned();
            $table->foreign('id_departamento')->references('id_departamentos')->on('departamentos');
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
        Schema::dropIfExists('ciclos_formativos');
    }
}
