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
        /*Busca todos las ofertas en las que esta inscrito el alumno y se los manda a la pagina donde las muestras */
        $ofertas=[];
        $inscripciones=Inscripcion::where('id_alumno',$idAlumno)->get();
        foreach($inscripciones as $inscripcion)
        {
            $temp=Oferta::find($inscripcion->id_oferta);
            array_push($ofertas,$temp);
        }
      return view('inscripciones.candidaturas',['ofertas'=>$ofertas]);
    }

    public function getCreate($idOferta,$idAlumno)
    {
        /*
         * Crea un nuevo registro a partir de los datos de una oferta a la que se apunta un alumno
        */
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
