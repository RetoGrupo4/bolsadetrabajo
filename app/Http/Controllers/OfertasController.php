<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Oferta;
use App\Departamento;
use App\Empresa;
class OfertasController extends Controller
{
	public function getOfertas()
    {
        //Busca todas las ofertas para que un alumno se apunte a ella
    	$ofertas= Oferta::all();
    	return view('ofertas.ofertas',['ofertas'=>$ofertas]);
    }

    public function getShow($idOferta)
    {
        //Busca los datos de una oferta para mostrarlo de forma individual
    	$oferta= Oferta::findOrFail($idOferta);
    	return view('ofertas.show',['oferta'=>$oferta]);
    }

    public function create()
    {
        //Redirecciona a la pagina donde se crea una nueva oferta
        $listaDepartamentos=Departamento::all();
        $listaEmpresas=Empresa::all();
        return view('ofertas.newoferta',['listaDepartamentos'=>$listaDepartamentos,
                                         'listaEmpresas'=>$listaEmpresas]);
    }

    public function postCreate(Request $request)
    {
        $oferta=new Oferta();
        $oferta->puesto=$request->input('puesto');
        $oferta->contrato=$request->input('contrato');
        $oferta->experiencia=$request->input('experiencia');
        $oferta->localidad=$request->input('localidad');
        $oferta->requisitos=$request->input('requisitos');
        $oferta->observaciones=$request->input('observaciones');
        $oferta->id_departamento=$request->input('departamento');
        $oferta->id_empresa=$request->input('empresa');
        $oferta->id_administrador=2;
        $oferta->save();
        $ofertas= Oferta::all();
        return view('ofertas.ofertas',['ofertas'=>$ofertas]);
    }

    public function deleteOferta($idOferta)
    {
        $oferta=Oferta::findOrFail($idOferta);
        $oferta->delete();
        $ofertas= Oferta::all();
        return view('ofertas.ofertas',['ofertas'=>$ofertas]);
    }
}
