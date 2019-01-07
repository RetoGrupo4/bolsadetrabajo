<?php

use Illuminate\Database\Seeder;

use App\Oferta;
class OfertasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('ofertas')->delete();

        $oferta=new Oferta();
        $oferta->experiencia="Sin definir";
        $oferta->requisitos="Tener acabado el C.F.G.S de Marketing y Publicidad";
        $oferta->puesto="Director de cuentas";
        $oferta->localidad="Bilbao";
        $oferta->observaciones="Necesario coche para llegar al puesto de trabajo";
        $oferta->id_empresa="1";
        $oferta->id_departamento="1";
        $oferta->id_administrador="1";
        $oferta->contrato="2 años";
        $oferta->save();

        $oferta=new Oferta();
        $oferta->experiencia="1 año";
        $oferta->requisitos="Tener acabado el C.F.G.S de Desarrollo de Aplicaciones Web";
        $oferta->puesto="Programador Junior";
        $oferta->observaciones="";
        $oferta->localidad="Derio";
        $oferta->id_empresa="2";
        $oferta->id_departamento="2";
        $oferta->id_administrador="2";
        $oferta->contrato="2 años";
        $oferta->save();

        $oferta=new Oferta();
        $oferta->experiencia="Sin definir";
        $oferta->requisitos="Tener acabado el C.F.G.S Qumica";
        $oferta->puesto="Tecnico de Laboratorio";
        $oferta->localidad="La Canona";
        $oferta->observaciones="";
        $oferta->id_empresa="3";
        $oferta->id_departamento="3";
        $oferta->id_administrador="3";
        $oferta->contrato="2 años";
        $oferta->save();
    }
}
