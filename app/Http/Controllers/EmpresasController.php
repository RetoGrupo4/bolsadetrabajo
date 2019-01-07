<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Empresa;
class EmpresasController extends Controller
{
    public function postCreate(Request $request)
    {
    	$empresa=new Empresa();
    	$empresa->nombre=$request->input('empresa');
    	$empresa->email=$request->input('Email');
    	$empresa->responsable=$request->input('responsable');
    	$empresa->telefono=$request->input('telefono');
    	$empresa->save();
    	//return redirect()->action('EmpresasController@getIndex');
    }
}
