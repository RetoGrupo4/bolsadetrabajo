@extends('layouts.master')


@section('content')
@include('partial.navbarAdministracion')
 

    <div class="container bg-info text-center">
      Listado de empresas
    </div>

    <!-- Listado de ofertas-->
  <div class="container-fluid">
  <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">Número</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo Electronico</th>
      <th scope="col">Responsable</th>
      <th scope="col">Telefono</th>
    </tr>
  </thead>

  @foreach($listaEmpresas as $empresa)
    <tr>
      <th scope="row">{{$empresa->id_empresas}}</th>
      <td><a href="{{url('empresas/show/'.$empresa->id_empresas)}}">{{$empresa->nombre}}</a></td>
      <td>{{$empresa->email}}</td>
      <td>{{$empresa->responsable}}</td>
      <td>{{$empresa->telefono}}</td>
    </tr>
   @endforeach
  </table>
  @endsection
