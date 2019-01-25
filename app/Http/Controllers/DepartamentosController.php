<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Departamento;
class DepartamentosController extends Controller
{
    public function getIndex()
    {
        //Busca todas las ofertas para que un alumno se apunte a ella
    	$listaDepartamentos= Departamento::all();
    	return view('departamentos.departamentos',['listaDepartamentos'=>$listaDepartamentos]);
    }

    public function getShow($idDepartamento)
    {
        //Busca los datos de una oferta para mostrarlo de forma individual
    	$departamento=Departamento::findOrFail($idDepartamento);
    	return view('departamentos.show',['departamento'=>$departamento]);
    }

    public function create()
    {
        //Redirecciona a la pagina donde se crea una nueva oferta
         return view('departamentos.newdepartamento');
    }

    public function getEdit($idDepartamento)
    {
    	$departamento=Departamento::findOrFail($idDepartamento);
    	return view('departamentos.edit');
    }
    public function postCreate(Request $request)
    {
    	//Crea el registro en la BD
        $departamento=new Departamento();
        $departamento->descripcion=$request->input('departamento');
        $departamento->save();
        $listaDepartamentos= Departamento::all();
        return view('departamentos.departamentos',['listaDepartamentos'=>$listaDepartamentos]);
    }

    public function deleteDepartamento($idOferta)
    {
    	//Borra el departamento
        $departamento=Departamento::findOrFail($idOferta);
        $departamento>delete();
        $ofertas= Oferta::all();
        return view('departamentos.departamentos',['ofertas'=>$ofertas]);
    }

}
