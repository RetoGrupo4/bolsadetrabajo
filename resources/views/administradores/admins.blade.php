<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Listado de administradores</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
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
  <!-- Zona navegación particular para las empresas --> 
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNavEmpresas">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="{{url('admin')}}">Listado de administradores</a>
          <a class="nav-item nav-link" href="{{url('admin/create')}}">Nuevo administrador</a>
        </div>
    </div>
  </nav>
 

    <div class="container bg-info text-center">
      Listado de administradores
    </div>
	
	<div class="container-fluid">
  <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">Número</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo Electronico</th>
      <th scope="col">rol</th>
    </tr>
  </thead>

  @foreach($listaAdministradores as $administrador)
    <tr>
      <th scope="row">{{$administrador->id_administradores}}</th>
      
         @if($administrador->rol==1)
      	<td>{{$administrador->nombre}}</td>
      	<td>{{$administrador->email}}</td>
      	<td>SuperAdministrador</td>
      @else
        <td><a href="{{url('admin/show/'.$administrador->id_administradores)}}">{{$administrador->nombre}}</a></td>
        <td>{{$administrador->email}}</td>
      	<td>Administrador</td>
      @endif
     
    </tr>
   @endforeach
  </table>

</body>
</html>