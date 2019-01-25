<?php

use Illuminate\Database\Seeder;

use App\Alumno;
class AlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->delete();

        $alumno=new Alumno();
        $alumno->dni='12345678A';
        $alumno->apellidos="Garcia Morales";
        $alumno->nombre="Raul";
        $alumno->direccion="C/Su Calle en algún lugar";
        $alumno->localidad="Bilbao";
        $alumno->codigo_postal="48001";
        $alumno->nacionalidad="Español";
        $alumno->sexo="H";
        $alumno->id_user="4";
        $alumno->id_departamento="2";
        $alumno->cv="C:\Documentos";
        $alumno->save();

        $alumno=new Alumno();
        $alumno->dni='23456781B';
        $alumno->apellidos="Hernandez";
        $alumno->nombre="Valeria";
        $alumno->direccion="C/Su Calle en algún lugar";
        $alumno->localidad="Bilbao";
        $alumno->codigo_postal="48002";
        $alumno->nacionalidad="Español";
        $alumno->sexo="M";
        $alumno->id_user="5";
        $alumno->cv="C:\Documentos";
        $alumno->id_departamento="2";

        $alumno->save();

        $alumno=new Alumno();
        $alumno->dni='34567812C';
        $alumno->apellidos="Parker";
        $alumno->nombre="Peter";
        $alumno->direccion="C/Un gran poder lleva una gran responsabilidad";
        $alumno->localidad="Bilbao";
        $alumno->codigo_postal="48002";
        $alumno->nacionalidad="Español";
        $alumno->sexo="H";
        $alumno->id_user="6";
        $alumno->id_departamento="2";
        $alumno->cv="C:\Documentos";
        $alumno->save();
    }
}
