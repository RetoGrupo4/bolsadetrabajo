<?php

use Illuminate\Database\Seeder;

use App\Departamento;
class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->delete();
        
        $departamento=new Departamento();
        $departamento->descripcion="Administracion";
        $departamento->save();

        $departamento=new Departamento();
        $departamento->descripcion="Informatica";
        $departamento->save();

        $departamento=new Departamento();
        $departamento->descripcion="Quimica";
        $departamento->save();
    }
}
