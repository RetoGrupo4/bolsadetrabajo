<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Departamento;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Http\UploadFile;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class alumnosController extends Controller
{

    //METODO INDEX
    public function index()
    {
        // obtener todos los alumnos
        $alumnos=Alumno::all();
        
        // carga la vista y pasa los alumnos
        return view('Alumnos.alumnos',['alumnos'=>$alumnos]);
    }


    public function getCreate()
    {
        $listaDepartamentos=Departamento::all();
        // carga la vista y pasa los alumnos
        return view('Alumnos.create',['listaDepartamentos'=>$listaDepartamentos]);
    }

    public function postCreate(Request $request)
    {
 
       
        //INSERTAR A LA BASE DE DATOS
        $alumno=new Alumno();
        $departamento->dni=$request->input('dni');
        $alumno->nombre=$request->input('nombre');
        $alumno->apellidos=$request->input('apellidos');
    	$alumno->direccion=$request->input('direccion');
    	$alumno->localidad=$request->input('localidad');
        $alumno->nacionalidad=$request->input('nacionalidad');
        $alumno->codigo_postal=$request->input('codigo');
        $alumno->id_user=Auth::user()->id;
        $alumno->sexo=$request->input('sexo');
        $alumno->id_departamento=$request->input('departamento'); 
        

        $alumno->cv = $request->file('file')->getClientOriginalName();
        $name = $request->file('file')->getClientOriginalName();
       
        Storage::disk('public')->putFileAs('cv', new File($request->file('file')),$name,'public');


    	$alumno->save();
        return redirect('alumno'); 
 
    }

    

    public function show($idAlumno)
    {
   
        $alumno=Alumno::where('id_user','=', $idAlumno)-> get();
        $id=$alumno[0];
        return view('Alumnos.show', ['alumno'=>$id,'user'=>Auth::user()]);
     
        
    }

    //METODO EDIT

    public function edit($idAlumno)
    {
        //Encuentra al alumno por su id y guarda sus datos en la variable alumno.
        $alumno=Alumno::find($idAlumno);
        return view('Alumnos.edit',['alumno'=>$alumno]);
    }

    //METODO UPDATE

    public function update(Request $request, $idAlumno)    {
         
        

        $alumno=Alumno::findOrFail($idAlumno);
         $alumno->dni=$request->get('dni');
         $alumno->direccion=$request->get('direccion');
         $alumno->localidad=$request->get('localidad');
         $alumno->nacionalidad=$request->get('nacionalidad');
         $alumno->codigo_postal=$request->get('codigo');
         

            $alumno->cv = $request->file('file')->getClientOriginalName();
            $name = $request->file('file')->getClientOriginalName();
           
            Storage::disk('public')->putFileAs('cv', new File($request->file('file')),$name,'public');
    
    
        
         
        $alumno->save();
      
        return redirect('alumno'); 
 
    }

 //METODO DELETE
    public function delete($idAlumno)
    {
        //
         Alumno::find($idAlumno)->delete();
         return redirect('alumno'); 
    }



}