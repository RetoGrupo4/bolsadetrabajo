@extends('layouts.master')

@section('content')


@include('partial.navbarAdministracion')


<h3 class="text-left titulo pt-5 ">LISTADO DE OFERTAS</h3>

    <!-- Listado de ofertas-->
  <div class="container-fluid">
  <table class="table mt-5 mb-5">
    <thead class="thead-dark">
  <tr>

      <th scope="col">PUESTO</th>
      <th scope="col">REQUISITOS</th>
      <th scope="col">CONTRATO</th>
      <th scope="col">EXPERIENCIA</th>
      <th scope="col">LOCALIDAD</th>
      <th scope="col">OBSERVACIONES</th>
   
    </tr>
  </thead>

  @foreach($ofertas as $oferta)
    <tr>
    
    
      <td><a href="{{url('ofertas/show/'.$oferta->id_ofertas)}}">{{$oferta->puesto}}</a></td>
      <td>{{$oferta->requisitos}}</td>
      <td>{{$oferta->contrato}}</td>
      <td>{{$oferta->experiencia}}</td>
      <td>{{$oferta->localidad}}</td>
      <td>{{$oferta->observaciones}}</td>

    </tr>
   @endforeach
  </table>

 
			     <a  class="btn btn-dark text-white mb-3" href="{{url('ofertas/create')}}" >
                   Insertar Ofertas
           </a>
     
     
  
</div>
@endsection
