@extends('layouts.master')

@section('content')
    <!-- Zona de navegación-->



<div class="container">
    <div class="row  mt-5 mb-5">
        <div class="col-lg-12 my-3 ">
            <div class="pull-right">
                <div class="btn-group">
                    <button class="btn btn-outline-info" id="list">
                        Lista
                    </button>
                    <button class="btn btn-outline-danger" id="grid">
                        Cuadricula
                    </button>
                </div>
            </div>
        </div>
    </div> 
    <div id="products" class="row view-group ">
    @foreach($ofertas as $oferta)
        <div class="item col-xs-4 col-lg-4">
            <div class="thumbnail card ">
                
                <div class="caption card-body">
                <h4 class="group card-title inner list-group-item-heading">{{$oferta->puesto}}</h4>
                    <p class="group inner list-group-item-text">{{$oferta->localidad}}
                    <div class="row">
                        <div class="col-12"><p class="group inner list-group-item-text"> {{$oferta->requisitos}}</p>
                        </div>
                        <div class="col-12  ">
                            <a class="btn btn-success "  href="{{url('ofertas/show/'.$oferta->id_ofertas)}}">Detalles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    
</div>
	<!-- Listado de ofertas
	<div class="container-fluid">
	<table class="table">
  	<thead class="bg-success">
    <tr class="text-white">
      <th scope="col">Fecha</th>
      <th scope="col">Puesto</th>
      <th scope="col">Experiencia</th>
      <th scope="col">Población</th>
    </tr>
  </thead>

  @foreach($ofertas as $oferta)
    <tr>
      <th scope="row">{{$oferta->created_at}}</th>
      <td><a href="{{url('ofertas/show/'.$oferta->id_ofertas)}}">{{$oferta->puesto}}</a></td>
      <td>{{$oferta->experiencia}}</td>
      <td>{{$oferta->localidad}}</td>
    </tr>
   @endforeach
  </table>
</div>
</div> -->



	<!--<table>
		<tr>
			<td>Fecha</td>
			<td>Puesto</td>
			<td>Experiencia</td>
			<td>Poblacón</td>
		</tr>
	 @foreach($ofertas as $key=> $oferta)
		<tr>
			<td>{{$oferta->created_at}}</td>
			<td>{{$oferta->puesto}}</td>
			<td>{{$oferta->experiencia}}</td>
			<td>Bilbao</td>
		</tr>
	 @endforeach
	</table>-->
	

	 @endsection
	 
	 	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
		$(document).ready(function() {
            $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
            $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
        });
    </script>
    
