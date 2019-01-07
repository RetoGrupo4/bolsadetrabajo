<?php

use Illuminate\Database\Seeder;

use App\Empresa;
class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->delete();

        $empresa=new Empresa();
        $empresa->nombre="Tecuni S.A";
        $empresa->email="tecuni@tecuni.com";
        $empresa->responsable="el director";
        $empresa->telefono="944620297";
        $empresa->save();

        $empresa=new Empresa();
        $empresa->nombre="Ibermatica";
        $empresa->email="ibermatica@ibermatica.com";
        $empresa->responsable="el director";
        $empresa->telefono="944620298";
        $empresa->save();

        $empresa=new Empresa();
        $empresa->nombre="Serikat S.L";
        $empresa->email="serikat@serikat.com";
        $empresa->responsable="el director";
        $empresa->telefono="944620299";
        $empresa->save();
    }
}
