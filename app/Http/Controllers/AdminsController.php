<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Administrador;
use App\Departamento;
class AdminsController extends Controller
{
    public function getIndex()
    {
    	$listaAdministradores=Administrador::all();
    	return view('administradores.admins',['listaAdministradores'=>$listaAdministradores]);
    }

    public function getShow($idAdministrador)
    {
    	$administradores=new Administrador();
    	$administrador=Administrador::findOrFail($idAdministrador);
    	return view('administradores.show',['administrador'=>$administrador]);
    }

    public function getCreate()
    {
    	$departamentos=new Departamento();
        $listaDepartamentos=Departamento::all();
        return view('administradores.newAdmin',['listaDepartamentos'=>$listaDepartamentos]);
    
     }
    public function postCreate(Request $request)
    {
        $administrador=new Administrador();
        $administrador->nombre=$request->input('nombre');
        $administrador->email=$request->input('Email');
        $administrador->password=bcrypt($request->input('password'));
        $administrador->id_departamento=3; //$departamento;
        $administrador->rol=$request->input('rol');
        $administrador->save();
        $listaAdministradores=Administrador::all();
        return view('administradores.admins',['listaAdministradores'=>$listaAdministradores]);
    }

    public function getEdit($idAdmin)
    {
        $administrador= Administrador::findOrFail($idAdmin);
        $listaDepartamentos=Departamento::all();
    	return view('administradores.edit',['administrador'=>$administrador,
                                             'listaDepartamentos'=>$listaDepartamentos]);
    }

    public function postUpdate(Request $request, $idAdmin)
    {

        $administrador=Administrador::findOrFail($idAdmin);
        $administrador->nombre=$request->input('nombre');
        $administrador->email=$request->input('Email');
        $administrador->password=bcrypt($request->input('password'));
        $administrador->id_departamento=3; //$departamento;
        $administrador->rol=$request->input('rol');
        $administrador->save();
        $listaAdministradores=Administrador::all();
        return view('administradores.admins',['listaAdministradores'=>$listaAdministradores]);
    }

    public function deleteAdmin($idAdmin)
    {
    	$administrador=Administrador::findOrFail($idAdmin);
    	$administrador->delete();
    	$administrador=Administrador::all();
    	return view('administradores.admins',['listaAdministradores'=>$administrador]);
    }
}
