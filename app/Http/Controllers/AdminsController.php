<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Administrador;

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
    	return view('administradores.newAdmin');
    }

    public function postCreate()
    {
    	
    }

    public function getEdit($idAdmin)
    {
    	return view('administradores.edit');
    }

    public function putEdit(Request $request, $idAdmin)
    {

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
