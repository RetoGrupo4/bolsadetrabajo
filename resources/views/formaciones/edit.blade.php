@extends('layouts.master')

@section('content')


@include('partial.navbarAlumnos')


<div class="text-left titulo pt-5 pb-4">FORMACIONES</div>

        <div class="row justify-content-center align-items-center">
            
            <div class="col-md-12 p-4 m-4 form formInsertar">
            <form action="{{action('formacionesController@update',$formacion->id_formaciones)}}" method="POST">
            {{ csrf_field() }} 
                {{method_field('PUT')}}
               
      
                        <div class="form-group">
                            <label >Ciclo formativo:</label>
                            <input type="text" class="form-control" name="ciclo" value="{{$formacion->ciclo_formativo}}">
                        </div>
                        <div class="form-group">
                            <label> Centro:</label>
                            <input type="text" class="form-control" name="centro" value="{{$formacion->centro}}" >
                        </div>
                        <div class="form-group">
                            <label>Titulo:</label>
                            <input class="form-control" name="titulo" value="{{$formacion->titulo}}">
                        </div>

                          <div class="form-group">
                            <label>Año:</label>
                            <input type="date" name="anio" value="{{$formacion->anio}}">                        
                        </div>

                        <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                    </form>
                </div>
           
    </div>
@endsection
