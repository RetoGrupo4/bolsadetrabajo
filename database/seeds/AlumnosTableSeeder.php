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
        $alumno->password="12345";
        $alumno->email="alumno1@gmail.com";
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
        $alumno->password="23456";
        $alumno->email="alumno2@gmail.com";
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
        $alumno->password="34567";
        $alumno->email="alumno3@gmail.com";
        $alumno->save();
    }
}
