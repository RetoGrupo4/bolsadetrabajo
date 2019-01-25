@extends('layouts.master')

@section('content')

@include('partial.navbarSuperAdministracion')


    
 <h3 class="text-left titulo pt-5 ">DATOS DEL DEPARTAMENTO</h3>

   <div class="container-fluid">
		<div class="card text-center mt-5 mb-5">
			  <div class="card-header">
			    Datos de la oferta
			  </div>
			  <div class="card-body">
			    
			    <p class="card-text">
			    	<strong>Nombre del departamento:</strong>: {{$departamento->descripcion}}
			    </p>
			    <a href="{{url('departamento/edit/'.$departamento->id_departamentos)}}" class="btn btn-primary">modificar</a>

			    <form action="{{action('DepartamentosController@deleteDepartamento',$departamento->id_departamentos)}}" method="POST" 
			 	style="display:inline">    
			 	{{method_field('DELETE')}}            
			    {{csrf_field()}}
			     <button type="submit" class="btn btn-danger" style="padding:8px 100px;margin-top:25px;">
                   Borrar departamento
               </button>
			    </form>
			  </div>
			  
		</div>
	</div>
@endsection
