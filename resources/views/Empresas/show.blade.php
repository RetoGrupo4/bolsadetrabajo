@extends('layouts.master')


@section('content')
@include('partial.navbarAdministracion')

<h3 class="text-left titulo pt-5 ">DATOS DE LA EMPRESA</h3>

<div class="container-fluid">
		<div class="card text-center mt-5 mb-5">
			  <div class="card-header">
			    Datos de la oferta
			  </div>
			  <div class="card-body">
			    <h5 class="card-title font-weight-bold">Nombre: {{$empresa->nombre}}</h5>
			    <p class="card-text">
			    	<strong>Email</strong>: {{$empresa->email}}
			    	<br>
			    	<strong>Responsable</strong>: {{$empresa->responsable}}
			    	<br>
			    	<strong>Telefono</strong>:{{$empresa->telefono}}
			    </p>
			    <form action="{{action('EmpresasController@getEdit',$empresa->id_empresas)}}" method="POST" 
			 	style="display:inline">                
			    {{csrf_field()}}
			     <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Modificar Empresa
               </button>
			</form>
			<form action="{{action('EmpresasController@deleteEmpresas',$empresa->id_empresas)}}" method="POST" 
			 	style="display:inline">
			 	{{method_field('DELETE')}}
			    {{csrf_field()}}
			     <button type="submit" class="btn btn-danger" style="padding:8px 100px;margin-top:25px;">
                   Borrar Empresa
               </button>
			</form>
			</div>
			  
		</div>
	</div>
@endsection