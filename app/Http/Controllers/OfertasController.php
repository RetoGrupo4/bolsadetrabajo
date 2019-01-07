<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Oferta;
class OfertasController extends Controller
{
	public function getOfertas()
    {
    	$ofertas= Oferta::all();
    	return view('ofertas.ofertas',['ofertas'=>$ofertas]);
    }

    public function getShow($idOferta)
    {
    	$oferta= Oferta::findOrFail($idOferta);
    	return view('ofertas.show',['oferta'=>$oferta]);
    }
}
