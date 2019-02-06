@extends('layouts.master')


@section('content')
@include('partial.navbarAdministracion')
 
 
  <!-- Zona navegación particular para las empresas --> 
  

  <h3 class="text-left titulo pt-5 ">NUEVA EMPRESA</h3>
    <!-- Formulario para coger los datos de la empresa-->
     <form class="  mt-5 mb-5 needs-validation" novalidate  action="{{action('EmpresasController@postCreate')}}" method="POST">
    
        {{ csrf_field() }}

        <div class="form-row">
          <!-- Nombre de la empresa-->
          <div class="col-md-6 mb-3">
            <label for="empresa">Nombre de la empresa </label>
            <input type="text" class="form-control" name="empresa" id="empresa" placeholder="Nombre del administrador" required>
            <div class="invalid-feedback">
                Por favor, introduzca un correo electronico valido
             </div>
          </div>

          <!-- Correo electronico al que mandaremos los alumnos inscritos-->
          <div class="col-md-6 mb-3">
            <label for="Email">Correo Electronico</label>
            <input type="email" class="form-control" id="email" name="email"  placeholder="usuario@dominio.com"  required>
            <div class="invalid-feedback">
                Por favor, introduzca un correo electronico valido
             </div>
          </div>

          <!-- Persona con la que nos pondremos en contacto en relación a la oferta-->
          
        </div>
        <div class="form-row">

        <div class="col-md-6 mb-3">
            <label for="responsable">Responsable</label>
            <div class="input-group">          
              <input type="text" class="form-control" name="responsable" id="responsable" placeholder="responsable de la empresa" aria-describedby="inputGroupPrepend" required>
             
            </div>
          </div>

          <!-- Telefono de contacto-->
          <div class="col-md-6 mb-3">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono" required>
           
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