@extends('layouts.master')


@section('content')
	 <!-- Zona de navegación-->

	<div class="container-fluid">
		<div class="card text-center">
			  <div class="card-header bg-success text-white">
			    Datos de la oferta
			  </div>
			  <div class="card-body">
			    <h5 class="card-title">Puesto: {{$oferta->puesto}}</h5>
			    <p class="card-text">
			    	<strong>Requisitos</strong>: {{$oferta->requisitos}}
			    	<br>
			    	<strong>Observaciones</strong>: {{$oferta->observaciones}}
			    	<br>
			    	<strong>Contrato</strong>:{{$oferta->contrato}}
			    </p>
			    <a href="{{url('inscripciones/create/'.$oferta->id_ofertas).'/'.'2'}}" class="btn btn-primary">Apuntarse</a>
			  </div>
			  
		</div>
	</div>

	
	@endsection