@extends('layouts.master')

@section('content')


@include('partial.navbarAlumnos')


<div class="text-left titulo pt-5 pb-4">FORMACIONES</div>

        <div class="row justify-content-center align-items-center">
            
            <div class="col-md-12 p-4 m-4 form formInsertar">
            <form class="needs-validation" novalidate  action="{{action('formacionesController@postCreate')}}" method="POST">
    
                 {{ csrf_field() }}
                        <div class="form-group">
                            <label >Ciclo formativo:</label>
                            <input type="text" class="form-control" name="ciclo">
                        </div>
                        <div class="form-group">
                            <label> Centro:</label>
                            <input type="text" class="form-control" name="centro" >
                        </div>
                        <div class="form-group">
                            <label>Titulo:</label>
                            <input class="form-control" name="titulo" >
                        </div>

                          <div class="form-group">
                            <label>Año:</label>
                            <input type="date" name="anio">                        
                        </div>

                        <div class="form-group">
                            <label>Alumno:</label>
                            <input type="number" name="id_alumno">                        
                        </div>

                         <button type="submit" class="btn btn-success">Enviar</button>
                    </form>
                </div>
           
    </div>
@endsection
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