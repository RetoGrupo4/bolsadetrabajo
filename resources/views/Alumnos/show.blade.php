@extends('layouts.master')

@section('content')
@include('partial.navbarAdministracion')

<div class="container-fluid">
	<div class="card text-center">
			<div class="card-header">
			Datos del alumno
				</div>
				<div class="card-body">
				<h5 class="card-title font-weight-bold">Alumno: {{$alumno->nombre}} {{$alumno->apellidos}}</h5>				
				<p class="card-text">
					<strong>Dni</strong>: {{$alumno->dni}}
					<br>
					<strong>Direccion</strong>: {{$alumno->direccion}}
					<br>
					<strong>Localidad</strong>:{{$alumno->localidad}}
					<br>
					<strong>CP</strong>:{{$alumno->codigo_postal}}
					<br>
					<strong>Nacionalidad</strong>:{{$alumno->nacionalidad}}
				</p>
			<form action="{{action('alumnosController@edit',$alumno->id_alumno)}}" method="POST" 
				style="display:inline">                
				{{csrf_field()}}
					<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
					Modificar Alumno
				</button>
			</form> 
			<form action="{{action('alumnosController@delete',$alumno->id_alumno)}}" method="POST" 
				style="display:inline">
				{{method_field('DELETE')}}
				{{csrf_field()}}
					<button type="submit" class="btn btn-danger" style="padding:8px 100px;margin-top:25px;">
					Borrar Alumno
				</button>
			</form>
		</div>
	</div>
</div>
@endsection