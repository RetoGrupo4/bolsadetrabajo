@extends('layouts.master')

@section('content')


@include('partial.navbarAlumnos')


<div class="text-left titulo  pt-5 pb-4">OFERTAS</div>

    <div class="container">
        <div class="row justify-content-center align-items-center">        
      

            <div class="col-md-12 p-4 m-4 form formInsertar">
                    <form action="{{action('OfertasController@postCreate')}}" method="POST">
                        
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
                            <label for="localidad"> localidad:</label>
                            <input type="text" class="form-control" name="localidad" >
                        </div>
                        <div class="form-group">
                            <label for="requisitos">Requisitos</label>
                            <textarea rows="5" cols="15" class="form-control" name="requisitos" id="requisitos">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="observaciones">Observaciones</label>
                            <textarea rows="5" cols="15" class="form-control" name="observaciones" id="observaciones">
                            </textarea>
                        </div>
                        <div>
                            <label for="departamento">Departamento</label>
                            <select class="form-control" id="departamento" name="departamento">
                                @foreach ($listaDepartamentos as $departamento)
                                    <option value="{{$departamento->id_departamentos}}">{{$departamento->descripcion}} {{$departamento->id_departamentos}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="empresa">Departamento</label>
                            <select class="form-control" id="empresa" name="empresa">
                                @foreach ($listaEmpresas as $empresa)
                                    <option value="{{$empresa->id_empresas}}">{{$empresa->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                         <button type="submit" class="btn btn-success">Enviar</button>
                    </form>
                </div>

            </div>
        </div>
   <!-- </div>-->
@endsection
