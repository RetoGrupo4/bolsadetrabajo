<?php

use Illuminate\Database\Seeder;

use App\Ciclo_Formativo;
class Ciclos_FormativosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("ciclos_formativos")->delete();

        $ciclo=new Ciclo_Formativo();
        $ciclo->ciclo_formativo="Desarrollo de Aplicaciones Web";
        $ciclo->id_departamento=2;
        $ciclo->save();

        $ciclo=new Ciclo_Formativo();
        $ciclo->ciclo_formativo="Desarrollo de Aplicaciones Multiplataforma";
        $ciclo->id_departamento=2;
        $ciclo->save();

        $ciclo=new Ciclo_Formativo();
        $ciclo->ciclo_formativo="Laboratorio de Análisis y de Control de Calidad";
        $ciclo->id_departamento=3;
        $ciclo->save();
    }
}
