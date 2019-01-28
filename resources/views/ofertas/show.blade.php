@extends('layouts.master')

@section('content')
@include('partial.navbarAdministracion')

	<div class="container-fluid">
		<div class="card text-center">
			  <div class="card-header">
			    Datos de la oferta
			  </div>
			  <div class="card-body">
			    <h5 class="card-title font-weight-bold">Puesto: {{$oferta->puesto}}</h5>
			    <p class="card-text">
			    	<strong>Requisitos</strong>: {{$oferta->requisitos}}
			    	<br>
			    	<strong>Observaciones</strong>: {{$oferta->observaciones}}
			    	<br>
			    	<strong>Contrato</strong>:{{$oferta->contrato}}
			    </p>
			    <a href="{{url('inscripciones/create/'.$oferta->id_ofertas).'/'.'2'}}" class="btn btn-primary">Apuntarse</a>

			    <form action="{{action('OfertasController@deleteOferta',$oferta->id_ofertas)}}" method="POST" 
			 	style="display:inline">    
			 	{{method_field('DELETE')}}            
			    {{csrf_field()}}
			     <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Borrar oferta
               </button>
			    </form>
			  </div>
			  
		</div>
	</div>
@endsection