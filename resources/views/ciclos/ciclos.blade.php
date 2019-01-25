@extends('layouts.master')


@section('content')
@include('partial.navbarSuperAdministracion')
 

   
<h3 class="text-left titulo pt-5 ">LISTADO DE CICLOS FORMATIVOS</h3>
	
	<div class="container-fluid">
  <table class="table mt-5 mb-5">
    <thead class="thead-dark">
    <tr>
      <th scope="col">Número</th>
      <th scope="col">Ciclo Formativo</th>
      <th scope="col">Departamento</th>
    </tr>
  </thead>

  @foreach($listaCiclos as $ciclo)
    <tr>
      <th scope="row">{{$ciclo->id_ciclos_formativos}}</th>      
        <td><a href="{{url('ciclo/show/'.$ciclo->id_ciclos_formativos)}}">{{$ciclo->ciclo_formativo}}</a></td>
        <td>{{$ciclo->id_departamento}}</td>
     
    </tr>
   @endforeach
  </table>
@endsection