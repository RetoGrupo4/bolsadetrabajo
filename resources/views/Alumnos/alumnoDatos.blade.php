@extends('layouts.master')

@section('content')
@include('partial.navbarAlumnos')

<div class="text-left titulo pt-5 ">DATOS DEL ALUMNO</div>

<div class="container p-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-12 p-2 form formInsertar">
            <form>
        <div class="form-row">
            <div class="form-group col-md-6">

            <label >Dni</label>
            <input type="text" class="form-control" name="dni">
            
            </div>
            <div class="form-group col-md-6">
            <label >Apellidos</label>
            <input type="text" class="form-control" name="apellidos">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">

            <label>Nombre</label>
            <input type="text" class="form-control" name="nombre" >

            </div>
            <div class="form-group col-md-6">
            <label >Direccion</label>
            <input type="text" class="form-control" name="direccion" >
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
            <label >Localidad</label>
            <input type="text" class="form-control" name="localidad">
        </div>
            <div class="form-group col-md-4">
            <label >Nacionalidad</label>
            <input type="text" class="form-control" id="nacionalidad" >
                            
            </div>
            <div class="form-group col-md-2">

            <label >Codigo Postal</label>
            <input type="text" class="form-control" id="codigo" >
                            
            </div>
        </div>
        <div class="form-group">
        <label >Sexo:</label>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="mujer" id="mujer" value="mujer" checked>
            <label class="form-check-label "> Mujer </label>
            </div>

            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="hombre" id="hombre" value="hombre">
            <label class="form-check-label">Hombre </label>
                                
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Datos</button>
            </form>
                </div>
            </div>
        </div>
    </div>
@endsection
