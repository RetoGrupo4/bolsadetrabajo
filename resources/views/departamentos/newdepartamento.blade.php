@extends('layouts.master')

@section('content')


@include('partial.navbarSuperAdministracion')

 
<h3 class="text-left titulo pt-5 ">NUEVO DEPARTAMENTO</h3>

    <div class="container mt-5 mb-5">
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
