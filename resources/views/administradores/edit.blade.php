<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nuevo administrador</title>
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
          <a class="nav-item nav-link" href="{{url('admin/create')}}">Nuevo administrador</a>
        </div>
      </div>
  </nav>

  <div class="container bg-info text-center">
      Modificar administrador
  </div>
    <!-- Formulario para coger los datos de la empresa-->
    <form action="{{url('admin/edit/'.$administrador->id_administradores)}}" method="POST">       
     {{method_field('POST')}}
      {{ csrf_field() }}
      <div class="form-row">
       <div class="form-group">
          <label for="inputAddress">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="{{$administrador->nombre}}" required>
       </div>
       <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="Email" name="Email" value="{{$administrador->email}}">
       </div>
       <div class="form-group col-md-6">
          <label for="inputPassword4">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
        
        </div>

      <div class="form-group">
        <label for="rol">Rol</label>
        <select id="rol" name="rol" class="form-control">
          <option selected value="2">Admnistrador</option>
          <option value="1">Super Administrador</option>
        </select>
      </div>
    </div>  
  <div class="form-row">

    <div class="form-group col-md-4">
      <label for="departamento">Departamento</label>
      <select id="departamento" name="departamento" class="form-control">
        @foreach($listaDepartamentos as $departamento)
          <option value="{{$departamento->id_departamentos}}">{{$departamento->descripcion}}</option>
        @endforeach
      </select>
    </div>

  </div>
 
  <button type="submit" class="btn btn-primary">Modificar</button>
</form>

</body>
</html>