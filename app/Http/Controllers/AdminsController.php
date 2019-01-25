<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Administrador;
use App\Departamento;
use App\User;
class AdminsController extends Controller
{
    public function getIndex()
    {
    	$listaAdministradores=Administrador::all();
    	return view('administradores.admins',['listaAdministradores'=>$listaAdministradores]);
    }

    public function getShow($idAdministrador)
    {
        
        // $usuario=User::find(1)->administrador;
    	$administrador=Administrador::findOrFail($idAdministrador);
       // echo $usuario->administrador->nombre;
    	return view('administradores.show',['administrador'=>$administrador]);
    }

    public function getCreate()
    {
        $listaDepartamentos=Departamento::all();
        return view('administradores.newAdmin',['listaDepartamentos'=>$listaDepartamentos]);
    
     }
    public function postCreate(Request $request)
    {
        $usuario=new User();
        $usuario->email=$request->input('Email');
        $usuario->password=bcrypt($request->input('password'));
        $usuario->rol=$request->input('rol');

        $usuario->save();
       
        $administrador=new Administrador();
        $administrador->nombre=$request->input('nombre');
        $administrador->id_departamento=$request->input('departamento'); //$departamento
        $administrador->id_user=$usuario->id;
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
