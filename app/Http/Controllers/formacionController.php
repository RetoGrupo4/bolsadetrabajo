<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Alumno;
use Illuminate\Http\Request;
use App\Formacion;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use Auth;

class formacionController extends Controller
{
    public function index(){
        $formacion = Formacion::paginate(6);
        return view('formacion.formaciones',compact('formacion'));
      }
    
      public function add(Request $request){
        $rules = array(
          'ciclo' => 'required',
          'centro' => 'required',
          'titulo' => 'required',
          'anio' => 'required',
        );
      $validator = Validator::make ( Input::all(), $rules);
      if ($validator->fails())
      return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
    
      else {
     /*    $userId = $request->id_user;
        //$alumno = Alumno::where('id_user',$userId)->first();
        //$alumno = Alumno::select('id_alumno')->where('id_user', 1)->get();
        $alumno = DB::select('select id_alumno from alumnos where id_user = :id', ['id' => $userId]);
        $id=$alumno->id_alumno;
 */ 
        $alumno = DB::table('alumnos')->join('users', 'alumnos.id_user', '=', 'users.id')->get();

    	$formacion = new Formacion;
        $formacion->ciclo = $request->ciclo;
        $formacion->centro = $request->centro;
        $formacion->titulo = $request->titulo;
        $formacion->anio = $request->anio;
        $formacion->id_alumno=$alumno->id_alumno;
		$formacion->save();
		
        return response()->json($formacion);
      }
	}

    public function edit(request $request){
        $formacion = Formacion::find ($request->id);
        $formacion->ciclo = $request->ciclo;
        $formacion->centro = $request->centro;
        $formacion->titulo = $request->titulo;
        $formacion->anio = $request->anio;
        $formacion->save();
        return response()->json($formacion);
        }
        
        public function delete(request $request){
        $formacion = Formacion::find ($request->id)->delete();
        return response()->json();
        }
        }