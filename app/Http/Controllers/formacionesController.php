<?php

namespace App\Http\Controllers;

use App\Formacion;

use Illuminate\Http\Request;

class formacionesController extends Controller
{

	public function index()
    {
        $formaciones = Formacion::all();

		return view('formaciones.formaciones',['formaciones'=>$formaciones]);

	}
	public function getCreate(Request $request)
    {
		return view('formaciones.create');
	}

    public function postCreate(Request $request)
    {
		
		//INSERTAR A LA BASE DE DATOS
    	$formacion=new Formacion();
    	$formacion->ciclo_formativo=$request->input('ciclo');
    	$formacion->centro=$request->input('centro');
    	$formacion->titulo=$request->input('titulo');
        $formacion->anio=$request->input('anio');
        $formacion->id_alumno=$request->input('id_alumno');
		$formacion->save();
		
        return redirect('formacion');
   
	}

	public function show($idFormacion)
    {
   
        $formacion=Formacion::find($idFormacion);
        return view('formaciones.show', ['formacion'=>$formacion]);
     
        
    }

	public function edit($idFormacion)
    {
        $formacion = Formacion::find($idFormacion);
        return view('formaciones.edit',['formacion'=>$formacion]);
    }
	

	public function update(Request $request, $idFormacion)
    {
     $formacion= Formacion::findOrFail($idFormacion);
        $formacion->ciclo_formativo=$request->get('ciclo');
        $formacion->centro=$request->get('centro');
        $formacion->titulo=$request->get('titulo');
        $formacion->anio=$request->get('anio');
        
        $formacion->save();
        return redirect('formacion'); 
     /*    $formacion = Formacion::findOrFail($idFormacion);
        $input = Request::all();
        $formacion->update($input);
        return redirect('formacion');
    */}

	public function delete($idFormacion)
    {
		$formacion= Formacion::find($idFormacion);
        $formacion->delete();
        return redirect('formacion');
    }


}