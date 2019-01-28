@extends('layouts.master')

@section('content')
@include('partial.navbarAlumnos')

<div class="container-fluid">
		<div class="card text-center">
			  <div class="card-header">
			    Datos del ciclo
			  </div>
			  <div class="card-body">
			    <h5 class="card-title font-weight-bold">Ciclo: {{$formacion->ciclo_formativo}}</h5>
				<h5 class="card-title font-weight-bold">Centro: {{$formacion->centro}}</h5>
			    <p class="card-text">
			    	<strong>Titulo</strong>: {{$formacion->titulo}}
			    	<br>
			    	<strong>Año</strong>: {{$formacion->anio}}
			    	
                </p>
                <form action="{{action('formacionesController@edit',$formacion->id_formaciones)}}" method="POST" 
			 	style="display:inline">                
			    {{csrf_field()}}
			     <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Modificar Formacion
               </button>
			</form> 
			<form action="{{action('formacionesController@delete',$formacion->id_formaciones)}}" method="POST" 
			 	style="display:inline">
			 	{{method_field('DELETE')}}
			    {{csrf_field()}}
			     <button type="submit" class="btn btn-danger" style="padding:8px 100px;margin-top:25px;">
                   Borrar Formacion
               </button>
			</form>
			
			    </div>
			  
	</div>
</div>
@endsection