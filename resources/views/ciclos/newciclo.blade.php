@extends('layouts.master')


@section('content')
@include('partial.navbarSuperAdministracion')
 
  
<h3 class="text-left titulo pt-5 ">NUEVO CICLO FORMATIVO</h3>
    <!-- Formulario para coger los datos de la empresa-->
    <form class=" mt-5 mb-5 needs-validation" novalidate  action="{{action('CiclosController@postCreate')}}" method="POST">
      {{method_field('POST')}}
      {{ csrf_field() }}
      <div class="form-row">
         <div class="form-group">
            <label for="inputAddress">Ciclo Formativo</label>
            <input type="text" class="form-control" id="ciclo" name="ciclo" placeholder="nombre del ciclo" required>
         </div>
         
         <div class="form-group col-md-4">
            <label for="departamento">Departamento</label>
            <select id="departamento" name="departamento" class="form-control">
              @foreach($listaDepartamentos as $departamento)
                <option value="{{$departamento->id_departamentos}}">{{$departamento->descripcion}}</option>
              @endforeach
            </select>
      </div>
  </div> 
  <button type="submit" class="btn btn-primary">Añadir</button>
</form>
@endsection