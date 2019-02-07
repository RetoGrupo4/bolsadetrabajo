@extends('layouts.master')

@section('content')
@include('partial.navbarAlumnos')

<h3 class="text-left titulo pt-5 ">DATOS DEL ALUMNO</h3>


<div class="container p-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-12 p-2 form formInsertar">
        <form class="needs-validation" novalidate action="{{action('alumnosController@postCreate')}}" method="POST" enctype="multipart/form-data">
    
    {{ csrf_field() }}
    {{ method_field('PUT') }}
       
        <div class="form-row">
            <div class="form-group col-md-6">

            <label>Dni</label>
            <input type="text" class="form-control" name="dni" >

            </div>
            <div class="form-group col-md-6">
            <label >Nombre</label>
            <input type="text" class="form-control" name="nombre" >
            </div>
            <div class="form-group col-md-6">
            <label >Apellidos</label>
            <input type="text" class="form-control" name="apellidos" >
            </div>
            <div class="form-group col-md-6">
            <label >Direccion</label>
            <input type="text" class="form-control" name="direccion" >
            </div>
            
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
            <label >Localidad</label>
            <input type="text" class="form-control" name="localidad">
            </div>
            <div class="form-group col-md-4">
            <label >Nacionalidad</label>
            <input type="text" class="form-control" name="nacionalidad" >
                            
            </div>
            <div class="form-group col-md-2">

            <label >CP</label>
            <input type="text" class="form-control" name="codigo" >
                            
            </div>
        </div>

        

    <div class="form-row">
        <div class = "form-group col-6">
            <legend> Sexo:  </legend>
            <div class = "form-check">
            <label class = "form-check-label">
            <input type = "radio" class = "form-check-input" name = "sexo" id = "mujer" value = "M" checked = ""> 
            MUJER
            </label>
            </div>
       
   
            <div class = "form-check">
            <label class = "form-check-label">
            <input type = "radio" class = "form-check-input" name = "sexo" id = "hombre" value = "H"> 
            HOMBRE
            </label>
            </div>
        </div>
        <div class="form-row">
      <div class="form-group col-md-4">
        <label for="departamento">Departamento</label>
        <select id="departamento" name="departamento" class="form-control">
          @foreach($listaDepartamentos as $departamento)
            <option value="{{$departamento->id_departamentos}}">{{$departamento->descripcion}}</option>
          @endforeach
        </select>
      </div>
   

    <div class = " pl-4 form-group col-6">
      <legend> Curriculum:  </legend>
        <label for="exampleFormControlFile1">Archivo PDF </label>
        <input type="file" class="form-control-file" id="file" name="file">
        </div> 
        </div>
            <div>
                <button type="submit" class="btn btn-success">Guardar Datos</button>
            </div>
            </form>
           
            </div>
        </div>
    </div>
@endsection
