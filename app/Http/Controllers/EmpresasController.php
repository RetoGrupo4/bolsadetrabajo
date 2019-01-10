<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Empresa;
class EmpresasController extends Controller
{
    public function getIndex()
    {
        $empresa=new Empresa();
        $listaEmpresas=$empresa::all();
        return view('empresas.empresas',['listaEmpresas'=>$listaEmpresas]);
    }
    public function postCreate(Request $request)
    {
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
        $empresas=new Empresa();
        $empresa=$empresas::findorfail($idEmpresa);
        return view('empresas.show', ['empresa'=>$empresa]);
    }
    
    public function getEdit($idEmpresa)
    {
        $empresas=new Empresa();
        $empresa= $empresas::findorfail($idEmpresa);
        return view('empresas.edit',['empresa'=>$empresa]);
    }

    public function putUpdate(Request $request,$idEmpresa)
    {
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
        $empresas=new Empresa();
        $empresa=$empresas::findorfail($idEmpresa);
        $empresa->delete();
        $empresas=new Empresa();
        $listaEmpresas=$empresas::all();
        return view('empresas.empresas',['listaEmpresas'=>$listaEmpresas]);
    }
}
