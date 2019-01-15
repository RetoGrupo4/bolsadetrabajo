<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Datos administrador</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<!-- Zona de navegación general para el superadministrado-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarGeneral">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="#">Administradores</a>
          <a class="nav-item nav-link" href="#">Departamentos</a>
          <a class="nav-item nav-link" href="#">Ciclos Formativos</a>
        </div>
    </div>
  </nav>
  <!-- Zona navegación particular para la gestión de "administradores" --> 
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNavEmpresas">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="{{url('admin')}}">Listado de administradores</a>
          <a class="nav-item nav-link active" href="{{url('admin/create')}}">Nuevo administrador</a>
        </div>
    </div>
  </nav>
 

    <div class="container bg-info text-center">
      Datos de administrador
    </div>
	<div class="container-fluid">
		<div class="card text-center">
			  <div class="card-header">
			    Datos de la oferta
			  </div>
			  <div class="card-body">
			    <h5 class="card-title">Nombre: {{$administrador->nombre}}</h5>
			    <p class="card-text">
			    	<strong>Email</strong>: {{$administrador->email}}
			    	<br>
			    	<strong>Rol</strong>: 
			    	@if($administrador->id_administradores==1)
			    		Superadministrador
			    	@else
			    		Administrador
			    	@endif
			    	<br>
			     </p>
			    <form action="{{action('AdminsController@getEdit',$administrador->id_administradores)}}" method="GET" 
			 	style="display:inline">                
			    {{csrf_field()}}
			     <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Modificar Administrador
               </button>
			</form>
			<form action="{{action('AdminsController@deleteAdmin',$administrador->id_administradores)}}" method="POST" 
			 	style="display:inline">
			 	{{method_field('DELETE')}}
			    {{csrf_field()}}
			     <button type="submit" class="btn btn-danger" style="padding:8px 100px;margin-top:25px;">
                   Borrar Administrador
               </button>
			</form>
			</div>			  
		</div>
	</div>

</body>
</html>