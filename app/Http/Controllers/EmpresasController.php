<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Empresa;
class EmpresasController extends Controller
{
    public function getIndex()
    {
        //Lee los datos de todas empresas para mostrarlos en la vista correspondiente
        $empresa=new Empresa();
        $listaEmpresas=$empresa::all();
        return view('empresas.empresas',['listaEmpresas'=>$listaEmpresas]);
    }
    public function postCreate(Request $request)
    {
        //Consigue los datos de una empresa y crea un nuevo registro
    	$empresa=new Empresa();
    	$empresa->nombre=$request->input('empresa');
    	$empresa->email=$request->input('Email');
    	$empresa->responsable=$request->input('responsable');
    	$empresa->telefono=$request->input('telefono');
       	$empresa->save();

    	return redirect()->action('EmpresasController@getIndex');
    }

    public function getShow($idEmpresa)
    {
        //Coge los datos de una empresa para mostrarlos
        $empresas=new Empresa();
        $empresa=$empresas::findorfail($idEmpresa);
        return view('empresas.show', ['empresa'=>$empresa]);
    }
    
    public function getEdit($idEmpresa)
    {
        //Coge los datos de la empresa y los manda al formulario para actualizarlos
        $empresas=new Empresa();
        $empresa= $empresas::findorfail($idEmpresa);
        return view('empresas.edit',['empresa'=>$empresa]);
    }

    public function putUpdate(Request $request,$idEmpresa)
    {
        //Coge los datos del formulario y actualiza los datos de la empresa
        $empresas=new Empresa();
        $empresa=$empresas::findOrFail($idEmpresa);
        $empresa->nombre=$request->input('empresa');
        $empresa->email=$request->input('Email');
        $empresa->responsable=$request->input('responsable');
        $empresa->telefono=$request->input('telefono');
        $empresa->save();

        return redirect()->action('EmpresasController@getIndex');
    }

    public function deleteEmpresas($idEmpresa)
    {
        //Borra los datos de una empresa y va al listado de todas las empresas.
        $empresas=new Empresa();
        $empresa=$empresas::findorfail($idEmpresa);
        $empresa->delete();
        $empresas=new Empresa();
        $listaEmpresas=$empresas::all();
        return view('empresas.empresas',['listaEmpresas'=>$listaEmpresas]);
    }
}
