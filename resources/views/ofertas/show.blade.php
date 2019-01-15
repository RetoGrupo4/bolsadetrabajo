<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Oferta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	
	 <!-- Zona de navegación-->

	<nav class="navbar navbar-expand-lg navbar-light bg-light">

	  	<a class="navbar-brand" href="#">Navbar</a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	 	 </button>
	 	 <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav">
		      <a class="nav-item nav-link active" href="#">Mi Curriculum</a>
		      <a class="nav-item nav-link" href="{{url('ofertas')}}">Nuestras ofertas</a>
		      <a class="nav-item nav-link" href="{{url('inscripciones/show/2')}}">Mis candidaturas</a>
		    </div>
	  </div>
	</nav>

	<div class="container-fluid">
		<div class="card text-center">
			  <div class="card-header">
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
</body>
</html>