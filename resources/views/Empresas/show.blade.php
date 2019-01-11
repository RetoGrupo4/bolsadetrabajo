<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Datos de la empresa</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	 <!-- Menú general para los administradores-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarGeneral">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="#">Alumnos</a>
          <a class="nav-item nav-link" href="#">Ofertas</a>
          <a class="nav-item nav-link" href="{{url('empresas')}}">Empresas</a>
        </div>
    </div>
  </nav>
  <!-- Zona navegación particular para las empresas --> 
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNavEmpresas">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="{{url('empresas')}}">Listado empresas</a>
          <a class="nav-item nav-link" href="{{url('empresas/create')}}">Nueva Empresa</a>
        </div>
    </div>
  </nav>
 
<div class="container-fluid">
		<div class="card text-center">
			  <div class="card-header">
			    Datos de la oferta
			  </div>
			  <div class="card-body">
			    <h5 class="card-title">Nombre: {{$empresa->nombre}}</h5>
			    <p class="card-text">
			    	<strong>Email</strong>: {{$empresa->email}}
			    	<br>
			    	<strong>Responsable</strong>: {{$empresa->responsable}}
			    	<br>
			    	<strong>Telefono</strong>:{{$empresa->telefono}}
			    </p>
			    <form action="{{action('EmpresasController@getEdit',$empresa->id_empresas)}}" method="POST" 
			 	style="display:inline">                
			    {{csrf_field()}}
			     <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Modificar Empresa
               </button>
			</form>
			<form action="{{action('EmpresasController@deleteEmpresas',$empresa->id_empresas)}}" method="POST" 
			 	style="display:inline">
			 	{{method_field('DELETE')}}
			    {{csrf_field()}}
			     <button type="submit" class="btn btn-danger" style="padding:8px 100px;margin-top:25px;">
                   Borrar Empresa
               </button>
			</form>
			</div>
			  
		</div>
	</div>
</body>
</html>