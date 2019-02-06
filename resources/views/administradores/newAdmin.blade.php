@extends('layouts.master')

@section('content')
@include('partial.navbarSuperAdministracion')
 
<h3 class="text-left titulo pt-5 ">NUEVO ADMINISTRADOR</h3>

    <!-- Formulario para coger los datos de la empresa-->
    <form class=" mt-5 mb-5 needs-validation" novalidate  action="{{action('AdminsController@postCreate')}}" method="POST">
      {{method_field('POST')}}
      {{ csrf_field() }}
      <div class="form-row">
        <div class="form-group">
          <label for="inputAddress">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre del administrador" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="Email" name="Email" placeholder="email">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
        </div>
      <div class="form-group">
        <label for="rol">Rol</label>
        <select id="rol" name="rol" class="form-control">
          <option selected value="2">Admnistrador</option>
          <option value="1">Super Administrador</option>
        </select>
      </div>
    </div>  
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="departamento">Departamento</label>
        <select id="departamento" name="departamento" class="form-control">
          @foreach($listaDepartamentos as $departamento)
            <option value="{{$departamento->id_departamentos}}">{{$departamento->descripcion}}</option>
          @endforeach
        </select>
      </div>
    </div>
  <button type="submit" class="btn btn-primary">Modificar</button>
</form>
@endsection