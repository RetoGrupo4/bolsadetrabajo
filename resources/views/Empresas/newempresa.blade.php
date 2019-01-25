@extends('layouts.master')


@section('content')
@include('partial.navbarAdministracion')
 
 
  <!-- Zona navegación particular para las empresas --> 
  

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
              <input type="text" class="form-control" name="rol" id="rol" placeholder="responsable de la empresa" aria-describedby="inputGroupPrepend" required>
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
@endsection