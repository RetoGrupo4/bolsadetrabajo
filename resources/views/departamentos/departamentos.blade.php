<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Departamentos</title>
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
		      <a class="nav-item nav-link" href="{{url('departamento')}}">Nuestros departamentos</a>
		      <a class="nav-item nav-link" href="{{url('departamento/create/')}}">Crear departamentos</a>
		    </div>
	  </div>
	</nav>

	<!-- Listado de ofertas-->
	<div class="container-fluid">
	<table class="table">
  	<thead class="thead-dark">
    <tr>
      <th scope="col">Número</th>
      <th scope="col">Descripción</th>
     
    </tr>
  </thead>

  @foreach($listaDepartamentos as $departamento)
    <tr>
      <th scope="row">{{$departamento->id_departamentos}}</th>
      <td><a href="{{url('departamento/show/'.$departamento->id_departamentos)}}">{{$departamento->descripcion}}</a></td>
    </tr>
   @endforeach
  </table>
</div>
</body>
</html>