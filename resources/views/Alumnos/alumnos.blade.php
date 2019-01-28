@extends('layouts.master')

@section('content')


@include('partial.navbarAdministracion')


<h3 class="text-left titulo pt-5 ">LISTADO DE ALUMNOS</h3>

    <!-- Listado de ofertas-->
  <div class="container-fluid">
  <table class="table mt-5 mb-5">
    <thead class="thead-dark">
  <tr>
      <th scope="col">Nº</th>
      <th scope="col">DNI</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">DIRECCION</th>
      <th scope="col">LOCALIDAD</th>
      <th scope="col">NACIONALIDAD</th>
      <th scope="col">CODIGO POSTAL</th>
      <th scope="col">SEXO</th>
    </tr>
  </thead>

  @foreach($alumnos as $alumno)
    <tr>
      <th scope="row">{{$alumno->id_alumno}}</th>
      <td><a href="{{url('alumno/show/'.$alumno->id_alumno)}}">{{$alumno->dni}}</a></td>
      <td>{{$alumno->nombre}}</td>
      <td>{{$alumno->apellidos}}</td>
      <td>{{$alumno->direccion}}</td>
      <td>{{$alumno->localidad}}</td>
      <td>{{$alumno->nacionalidad}}</td>
      <td>{{$alumno->codigo_postal}}</td>
      <td>{{$alumno->sexo}}</td>
    </tr>
   @endforeach
  </table>

 
			     <a  class="btn btn-dark text-white mb-3" href="{{url('alumno/create')}}" >
                   Insertar Alumnos
           </a>
     
     
  
</div>
@endsection
