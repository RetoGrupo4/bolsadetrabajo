@extends('layouts.master')

@section('content')


@include('partial.navbarAlumnos')

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
<div class="text-left titulo  pt-5 pb-4">OFERTAS</div>

    <div class="container">
        <div class="row justify-content-center align-items-center">        
      

            <div class="col-md-12 p-4 m-4 form formInsertar">
                    <form action="#" method="POST">
                        
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="departamento">Departamento:</label>
                            <input type="text" class="form-control" name="departamento">
                        </div>
                        
                         <button type="submit" class="btn btn-success">Enviar</button>
                    </form>
                </div>

            </div>
        </div>
   <!-- </div>-->
@endsection
