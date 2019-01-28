@extends('layouts.master')


@section('content')
@include('partial.navbarAdministracion')
 
<h3 class="text-left titulo pt-5 ">LISTADO DE EMPRESAS</h3>

    <!-- Listado de ofertas-->
  <div class="container-fluid">
  <table class="table  mt-5 mb-5">
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
