@extends('layouts.master')

@section('content')


@include('partial.navbarAlumnos')


<div class="text-left titulo  pt-5 pb-4">OFERTAS</div>

    <div class="container">
        <div class="row justify-content-center align-items-center">
            
      

            <div class="col-md-12 p-4 m-4 form formInsertar">
                    <form action="#" method="put">
                        {{method_field('PUT')}}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="puesto">Puesto:</label>
                            <input type="text" class="form-control" name="puesto">
                        </div>
                        <div class="form-group">
                            <label for="experiencia"> Experiencia:</label>
                            <input type="text" class="form-control" name="experiencia" >
                        </div>
                        <div class="form-group">
                            <label for="contrato">Contrato:</label>
                            <input class="form-control" name="contrato" >
                        </div>
                        <div class="form-group">
                            <label for="experiencia">Experiencia:</label>
                            <input type="text" class="form-control" name="experiencia">
                        </div>
                        <div class="form-group">
                            <label for="localidad"> localidad:</label>
                            <input type="text" class="form-control" name="localidad" >
                        </div>

                          <div class="form-group">
                            <label>Año:</label>
                        <input type="date" name="anio" >                        
                        </div>

                         <button type="submit" class="btn btn-success">Enviar</button>
                    </form>
                </div>

            </div>
        </div>
   <!-- </div>-->
@endsection
