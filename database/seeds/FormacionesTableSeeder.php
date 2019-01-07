<?php

use Illuminate\Database\Seeder;

use App\Formacion;
class FormacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('formaciones')->delete();
        
        $formacion=new Formacion();
        $formacion->titulo="Sistemas de Telecomunicaciones e Informaticos";
        $formacion->centro="FP Santurtzi";
        $formacion->anio="1999-6-6";
        $formacion->ciclo_formativo="ST3";
        $formacion->id_alumno=1;
        $formacion->save();

        $formacion=new Formacion();
        $formacion->titulo="Desarrollo de Aplicaciones Multiplataformas";
        $formacion->centro="FP Elorrieta";
        $formacion->anio="2010-6-7";
        $formacion->ciclo_formativo="D.A.M";
        $formacion->id_alumno=1;
        $formacion->save();
    }
}
