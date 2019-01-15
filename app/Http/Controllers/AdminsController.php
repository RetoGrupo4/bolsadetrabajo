<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Administrador;
use App\Departamento;
class AdminsController extends Controller
{
    public function getIndex()
    {
    	$administradores=new Administrador();
    	$listaAdministradores=$administradores::all();
    	return view('administradores.admins',['listaAdministradores'=>$listaAdministradores]);
    }

    public function getShow($idAdministrador)
    {
    	$administradores=new Administrador();
    	$administrador=$administradores::findOrFail($idAdministrador);
    	return view('administradores.show',['administrador'=>$administrador]);
    }

    public function getCreate()
    {
    	$departamentos=new Departamento();
        $listaDepartamentos=$departamentos::all();
        return view('administradores.newAdmin',['listaDepartamentos'=>$listaDepartamentos]);
    
     }
    public function postCreate()
    {
      
    }

    public function getEdit($idAdmin)
    {
        $administradores=new Administrador();
        $administrador= $administradores->findOrFail($idAdmin);

        $departamentos=new Departamento();
        $listaDepartamentos=$departamentos::all();
    	return view('administradores.edit',['administrador'=>$administrador,
                                             'listaDepartamentos'=>$listaDepartamentos]);
    }

    public function postUpdate(Request $request, $idAdmin)
    {

        $administradores= new Administrador();
        $administrador=$administradores::findOrFail($idAdmin);
        $administrador->nombre=$request->input('nombre');
        $administrador->email=$request->input('Email');
        $administrador->password=bcrypt($request->input('password'));
        $administrador->id_departamento=3; //$departamento;
        $administrador->rol=$request->input('rol');
        $administrador->save();
        $administradores=new Administrador;
        $listaAdministradores=$administradores::all();
        return view('administradores.admins',['listaAdministradores'=>$listaAdministradores]);
    }

    public function deleteAdmin($idAdmin)
    {
    	$administradores=new Administrador();
    	$administrador=$administradores::findOrFail($idAdmin);
    	$administrador->delete();
    	$administrador=$administradores::all();
    	return view('administradores.admins',['listaAdministradores'=>$administrador]);
    }
}
