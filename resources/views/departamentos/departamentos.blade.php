@extends('layouts.master')


@section('content')
@include('partial.navbarSuperAdministracion')
 
<h3 class="text-left titulo pt-5 ">LISTADO DE DEPARTAMENTOS</h3>
	<!-- Listado de ofertas-->
	<div class="container-fluid">
	<table class="table mt-5 mb-5">
  	<thead class="thead-dark">
    <tr>
      <th scope="col">Número</th>
      <th scope="col">Descripción</th>
     
    </tr>
  </thead>

  @foreach($listaDepartamentos as $departamento)
    <tr>
      <th scope="row">{{$departamento->id_departamentos}}</th>
      <td><a href="{{url('departamento/show/'.$departamento->id_departamentos)}}">{{$departamento->descripcion}}</a></td>
    </tr>
   @endforeach
  </table>
</div>
@endsection