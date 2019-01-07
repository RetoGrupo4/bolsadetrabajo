<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Inscripcion;
use App\Oferta;
use DB;
class InscripcionesController extends Controller
{
    public function getShow($idAlumno)
    {
        $ofertas=[];
        $inscripciones=Inscripcion::where('id_alumno',$idAlumno)->get();
        foreach($inscripciones as $inscripcion)
        {
            $temp=Oferta::find($inscripcion->id_oferta);
            array_push($ofertas,$temp);
        }
      return view('ofertas.ofertas',['ofertas'=>$ofertas]);
    }

    public function getCreate($idOferta,$idAlumno)
    {
      /* $total=new Inscripcion();
        $total=DB::table('inscripciones')->where('id_oferta','=',$idOferta)
                                         ->where('id_alumno','=',$idAlumno)
                                         ->get();
        if(!isset($total))
        {*/
    	$inscripcion=new Inscripcion();
    	$inscripcion->id_oferta=$idOferta;
    	$inscripcion->id_alumno=$idAlumno;
    	$inscripcion->fecha="2017/12/01";
    	$inscripcion->save();
       /* }
        else
        {
           foreach($total as $t1)
            {
                $x=$t1->id_oferta;
                $x=(int)$x-1;
                return redirect('ofertas/show/'.$x);}
            }*/
        return redirect('ofertas/show/'.$idOferta);
    }
}
