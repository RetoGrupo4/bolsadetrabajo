@extends('layouts.master')

@section('content')
@include('partial.navbarAlumnos')

<div class="text-left titulo pt-5 ">DATOS DEL ALUMNO</div>

<div class="container p-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-12 p-2 form formInsertar">
            <form action="{{action('alumnosController@update',$alumno->id_alumno)}}" method="POST" enctype="multipart/form-data">
           
            {{ method_field('PUT') }}
        {{ csrf_field() }} 
       
        <div class="form-row">
            <div class="form-group col-md-6">

            <label>Dni</label>
            <input type="text" class="form-control" name="dni" value="{{$alumno->dni}}">

            </div>
            <div class="form-group col-md-6">
            <label >Direccion</label>
            <input type="text" class="form-control" name="direccion" value="{{$alumno->direccion}}">
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
            <label >Localidad</label>
            <input type="text" class="form-control" name="localidad" value="{{$alumno->localidad}}">
            </div>
            <div class="form-group col-md-4">
            <label >Nacionalidad</label>
            <input type="text" class="form-control" name="nacionalidad" value="{{$alumno->nacionalidad}}" >
                            
            </div>
            <div class="form-group col-md-2">

            <label >CP</label>
            <input type="text" class="form-control" name="codigo" value="{{$alumno->codigo_postal}}">
                            
            </div>

            <div class = "form-group col-6">
      <legend> Curriculum:  </legend>
        <label for="exampleFormControlFile1">Archivo PDF </label>
        <input type="file" class="form-control-file" id="file" name="file">
        </div> 
        </div>
      
        <button type="submit" class="btn btn-primary">Actualizar Datos</button>
            </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection