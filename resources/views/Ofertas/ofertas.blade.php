<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ofertas</title>
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

	<!-- Listado de ofertas-->
	<div class="container-fluid">
	<table class="table">
  	<thead class="thead-dark">
    <tr>
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
	
	<!-- Primero jQuery, luego Popper.js, y por ultimo Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>