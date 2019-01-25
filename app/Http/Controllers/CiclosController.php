<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciclo_Formativo;
use App\Departamento;
class CiclosController extends Controller
{
    //Consigue todos los registros de la tabla ciclos_formativos
    public function getIndex()
    {
    	$listaCiclos=Ciclo_Formativo::all();
    	return view('ciclos.ciclos',['listaCiclos'=>$listaCiclos]);
    }

    //Busca un registro por su clave primaria
    public function getShow($idCiclo)
    {
        
        $ciclo=Ciclo_formativo::find($idCiclo);
    	//$administrador=Administrador::findOrFail($idAdministrador);
    	return view('ciclos.show',['ciclo'=>$ciclo]);
    }

    public function getCreate()
    {
        $listaDepartamentos=Departamento::all();
        return view('ciclos.newciclo',['listaDepartamentos'=>$listaDepartamentos]);
    
     }
    public function postCreate(Request $request)
    {
              
        $ciclo=new Ciclo_formativo();
        $ciclo->ciclo_formativo=$request->input('ciclo');
        $ciclo->id_departamento=$request->input('departamento'); //$departamento
        $ciclo->save();
        $listaCiclos=Ciclo_formativo::all();
        return view('ciclos.ciclos',['listaCiclos'=>$listaCiclos]);
    }

   public function getEdit($idCiclo)
    {
        $ciclo= Ciclo_formativo::findOrFail($idCiclo);
        $listaDepartamentos=Departamento::all();
    	return view('ciclos.edit',['ciclo'=>$ciclo,
                                   'listaDepartamentos'=>$listaDepartamentos]);
    }

    public function postUpdate(Request $request, $idCiclo)
    {

        $ciclo=Ciclo_formativo::findOrFail($idCiclo);
        $ciclo->ciclo_formativo=$request->input('ciclo');
        $ciclo->id_departamento=$request->input('departamento');
        $ciclo->save();
        $listaCiclos=Ciclo_formativo::all();
        return view('ciclos.ciclos',['listaCiclos'=>$listaCiclos]);
    }

    public function deleteCiclo($idCiclo)
    {
    	$ciclo=Ciclo_formativo::findOrFail($idCiclo);
    	$ciclo->delete();
    	$listaCiclos=Ciclo_formativo::all();
    	return view('ciclos.ciclos',['listaCiclos'=>$listaCiclos]);
    }
}
