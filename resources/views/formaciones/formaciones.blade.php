@extends('layouts.master')

@section('content')


@include('partial.navbarAlumnos')


<h3 class="text-left titulo pt-5 ">LISTADO DE CICLOS FORMATIVOS</h3>

    <!-- Listado de ofertas-->
  <div class="container-fluid">
  <table class="table mt-5 mb-5">
    <thead class="thead-dark">
    <tr>
      <th scope="col">Nº</th>
      <th scope="col">CICLO FORMATIVO</th>
      <th scope="col">CENTRO</th>
      <th scope="col">TITULO</th>
      <th scope="col">AÑO</th>
     
    </tr>
  </thead>

  @foreach($formaciones as $formacion)
    <tr>
      <th scope="row">{{$formacion->id_formaciones}}</th>
      <td><a href="{{url('formacion/show/'.$formacion->id_formaciones)}}">{{$formacion->ciclo_formativo}}</a></td>
      <td>{{$formacion->centro}}</td>
      <td>{{$formacion->titulo}}</td>
      <td>{{$formacion->anio}}</td>
      
    </tr>
   @endforeach
  </table>

 
			     <a  class="btn btn-dark text-white mb-3" href="{{url('formacion/create')}}" >
                   Insertar Formaciones
           </a>
     
     
  
</div>


@endsection

