@extends('layouts.master')


@section('content')
@include('partial.navbarSuperAdministracion')
 

<h3 class="text-left titulo pt-5 ">DATOS DEL CICLOS FORMATIVOS</h3>

	<div class="container-fluid">
		<div class="card text-center mt-5 mb-5">
			  <div class="card-header">
			    Datos de la oferta
			  </div>
			  <div class="card-body">
			    <h5 class="card-title">Ciclo: {{$ciclo->ciclo_formativo}}</h5>
			    <p class="card-text">
			    	<strong>Departamento</strong>: {{$ciclo->id_departamento}}
			    	<br>
			    </p>
			     <form action="{{action('CiclosController@getEdit',$ciclo->id_ciclos_formativos)}}" method="GET" 
			 	style="display:inline">                
			    {{csrf_field()}}
			     <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Modificar Ciclo
               </button>
			</form>
			<form action="{{action('CiclosController@deleteCiclo',$ciclo->id_ciclos_formativos)}}" method="POST" 
			 	style="display:inline">
			 	{{method_field('DELETE')}}
			    {{csrf_field()}}
			     <button type="submit" class="btn btn-danger" style="padding:8px 100px;margin-top:25px;">
                   Borrar Empresa
               </button>
			  </div>
			  
		</div>
	</div>
@endsection