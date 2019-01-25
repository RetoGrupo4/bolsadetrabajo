@extends('layouts.master')


@section('content')
@include('partial.navbarSuperAdministracion')
 
<h3 class="text-left titulo pt-5 ">DATOS DEL ADMINISTRADOR</h3>

	<div class="container-fluid">
		<div class="card text-center mt-5 mb-5">
			  <div class="card-header">
			    Datos de la oferta
			  </div>
			  <div class="card-body">
			    <h5 class="card-title">Nombre: {{$administrador->nombre}}</h5>
			    <p class="card-text">
			    	<strong>Email</strong>: {{$administrador->email}}
			    	<br>
			    	<strong>Rol</strong>: 
			    	@if($administrador->id_administradores==1)
			    		Superadministrador
			    	@else
			    		Administrador
			    	@endif
			    	<br>
			     </p>
			    <form action="{{action('AdminsController@getEdit',$administrador->id_administradores)}}" method="GET" 
			 	style="display:inline">                
			    {{csrf_field()}}
			     <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Modificar Administrador
               </button>
			</form>
			<form action="{{action('AdminsController@deleteAdmin',$administrador->id_administradores)}}" method="POST" 
			 	style="display:inline">
			 	{{method_field('DELETE')}}
			    {{csrf_field()}}
			     <button type="submit" class="btn btn-danger" style="padding:8px 100px;margin-top:25px;">
                   Borrar Administrador
               </button>
			</form>
			</div>			  
		</div>
	</div>
@endsection