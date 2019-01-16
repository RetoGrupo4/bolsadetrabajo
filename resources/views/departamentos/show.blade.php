@extends('layouts.master')

@section('content')


@include('partial.navbarAlumnos')

 <!-- Zona de navegación-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link" href="{{url('departamento')}}">Nuestros departamentos</a>
              <a class="nav-item nav-link" href="{{url('departamento/create/')}}">Crear departamentos</a>
            </div>
      </div>
    </nav>
<div class="text-left titulo  pt-5 pb-4">Departamentos</div>

   <div class="container-fluid">
		<div class="card text-center">
			  <div class="card-header">
			    Datos del departamento.
			  </div>
			 
			   <div class="card-body">
			    
			    <p class="card-text">
			    	<strong>Nombre del departamento:</strong>: {{$departamento->descripcion}}
			    </p>
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
