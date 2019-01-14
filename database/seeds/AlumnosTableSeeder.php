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
        $alumno->direccion="C/Su Calle en algún lugar";
        $alumno->localidad="Bilbao";
        $alumno->codigo_postal="48001";
        $alumno->nacionalidad="Español";
        $alumno->sexo="H";
        $alumno->save();

        $alumno=new Alumno();
        $alumno->dni='23456781B';
        $alumno->direccion="C/Su Calle en algún lugar";
        $alumno->localidad="Bilbao";
        $alumno->codigo_postal="48002";
        $alumno->nacionalidad="Español";
        $alumno->sexo="M";
        $alumno->save();

        $alumno=new Alumno();
        $alumno->dni='34567812C';
        $alumno->direccion="C/Un gran poder lleva una gran responsabilidad";
        $alumno->localidad="Bilbao";
        $alumno->codigo_postal="48002";
        $alumno->nacionalidad="Español";
        $alumno->sexo="H";
     
        $alumno->save();
    }
}
