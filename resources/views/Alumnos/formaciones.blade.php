@extends('layouts.master')

@section('content')


@include('partial.navbarAlumnos')


<div class="text-left titulo  pt-5 pb-4">FORMACIONES</div>

    <div class="container">
        <div class="row justify-content-center align-items-center">
            
      

            <div class="col-md-12 p-4 m-4 form formInsertar">
                    <form>
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
                        <input type="date" name="anio" >                        
                        </div>

                         <button type="submit" class="btn btn-success">Enviar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
