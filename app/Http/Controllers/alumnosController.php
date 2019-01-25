<?php

namespace App\Http\Controllers;

use App\Alumno;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Http\UploadFile;

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
  
        // carga la vista y pasa los alumnos
        return view('Alumnos.create');
    }

    public function postCreate(Request $request)
    {
        //INSERTAR A LA BASE DE DATOS
        $alumno=new Alumno();
        $alumno->dni=$request->input('dni');
        $alumno->nombre=$request->input('nombre');
        $alumno->apellidos=$request->input('apellidos');
    	$alumno->direccion=$request->input('direccion');
    	$alumno->localidad=$request->input('localidad');
        $alumno->nacionalidad=$request->input('nacionalidad');
        $alumno->codigo_postal=$request->input('codigo');
        $alumno->id_user=$request->input('user');
        $alumno->id_departamento=$request->input('depar');
        $alumno->sexo=$request->input('sexo');

 
        $alumno->cv = $request->file('file')->getClientOriginalName();
        $name = $request->file('file')->getClientOriginalName();
       
        Storage::disk('public')->putFileAs('cv', new File($request->file('file')),$name,'public');


    	$alumno->save();
        return redirect('alumno'); 
 
    }

    

    public function show($idAlumno)
    {
   
        $alumno=Alumno::find($idAlumno);
        return view('Alumnos.show', ['alumno'=>$alumno]);
     
        
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