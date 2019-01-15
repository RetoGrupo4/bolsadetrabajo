<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Listado de empresas</title>
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
 

    <div class="container bg-info text-center">
      Listado de empresas
    </div>

    <!-- Listado de ofertas-->
  <div class="container-fluid">
  <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">Número</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo Electronico</th>
      <th scope="col">Responsable</th>
      <th scope="col">Telefono</th>
    </tr>
  </thead>

  @foreach($listaEmpresas as $empresa)
    <tr>
      <th scope="row">{{$empresa->id_empresas}}</th>
      <td><a href="{{url('empresas/show/'.$empresa->id_empresas)}}">{{$empresa->nombre}}</a></td>
      <td>{{$empresa->email}}</td>
      <td>{{$empresa->responsable}}</td>
      <td>{{$empresa->telefono}}</td>
    </tr>
   @endforeach
  </table>
</body>
</html>