<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nuevo administrador</title>
	<link rel="stylesheet" href="">
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
      Datos de nueva empresa
    </div>
    <!-- Formulario para coger los datos de la empresa-->
    <form class="needs-validation" novalidate  action="{{action('AdminsController@postCreate')}}" method="POST">
    
        {{ csrf_field() }}

        <div class="form-row">
          <!-- Nombre de la empresa-->
          <div class="col-md-4 mb-3">
            <label for="empresa">Nombre del administrador</label>
            <input type="text" class="form-control" name="administrador" id="administrador" placeholder="Nombre del administrador" required>
            <div class="invalid-feedback">
                Por favor, introduzca un correo electronico valido
             </div>
          </div>

          <!-- Correo electronico al que mandaremos los alumnos inscritos-->
          <div class="col-md-4 mb-3">
            <label for="Email">Correo Electronico</label>
            <input type="email" class="form-control" id="Email" name="Email"  placeholder="usuario@dominio.com"  required>
            <div class="invalid-feedback">
                Por favor, introduzca un correo electronico valido
             </div>
          </div>

          <!-- Persona con la que nos pondremos en contacto en relación a la oferta-->
          <div class="col-md-4 mb-3">
            <label for="responsable">Rol</label>
            <div class="input-group">          
              <input type="number" class="form-control" name="rol" id="rol" placeholder="responsable de la empresa" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Por favor, introduzca el nombre de la persona de contacto.
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">

          <!-- Telefono de contacto-->
          <div class="col-md-12 mb-3">
            <label for="telefono">Contraseña</label>
            <input type="text" class="form-control" name="contrasenia" id="contrasenia" placeholder="Contraseña" required>
           
          </div>

          <button class="btn btn-primary" type="submit">Enviar</button>
  </form>
</div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>