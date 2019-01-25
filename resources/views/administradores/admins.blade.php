@extends('layouts.master')


@section('content')
@include('partial.navbarSuperAdministracion')
 
 

<h3 class="text-left titulo pt-5 ">LISTADO DE ADMINISTRADORES</h3>

	<div class="container-fluid">
  <table class="table mt-5 mb-5">
    <thead class="thead-dark">
    <tr>
      <th scope="col">Número</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo Electronico</th>
      <th scope="col">rol</th>
    </tr>
  </thead>

  @foreach($listaAdministradores as $administrador)
    <tr>
      <th scope="row">{{$administrador->id_administradores}}</th>
      
         @if($administrador->rol==1)
      	<td>{{$administrador->nombre}}</td>
      	<td>{{$administrador->email}}</td>
      	<td>SuperAdministrador</td>
      @else
        <td><a href="{{url('admin/show/'.$administrador->id_administradores)}}">{{$administrador->nombre}}</a></td>
        <td>{{$administrador->email}}</td>
      	<td>Administrador</td>
      @endif
     
    </tr>
   @endforeach
  </table>
@endsection