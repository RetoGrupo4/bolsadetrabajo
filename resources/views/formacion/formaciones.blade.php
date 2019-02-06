@extends('layouts.app')

@section('content')




  <nav class="navbar navbar-expand-lg navbar-light bg-transparent navborder  mt-5">
  <a class="navbar-brand font-weight-bold" href="#" style="color:black;margin-top:2em;">Alumnos:</a>
   <span class="navbar-toggler-icon"></span>
      </button>
        @if( true || Auth::check() )
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" style="margin:2em;">
                <li class="nav-item active">
                      <a class=" nav-link text-white" href="{{url('alumno/create')}}">Nuevos Datos <span class="sr-only">(current)</span></a>
                </li>

                 <li class="nav-item active">
                      <a class="nav-link text-white" href="{{url('alumno/show/'.Auth::user()->id)}}">Perfil</a>
                </li>
            
                <li class="nav-item active">
                      <a class="nav-link text-white" href="{{url('ofertas')}}">Ofertas</a>
                </li>

                <li class="nav-item active">
                      <a class="nav-link text-white" href="{{url('formacion')}}">Formaciones</a>
                </li>

                <li class="nav-item active">
                      <a class="nav-link text-white" href="{{url('inscripciones/create/1/1')}}">Candidaturas</a>
                </li>

                <li class="nav-item active">
                   <a class="nav-item nav-link text-white" href="{{url('logout')}}">Salir</a>               
                 </li>

            </ul>
                 
        </div>
        @endif
  </nav>


<div class="row">
  <div class="col-md-12">
  <h3 class="text-left titulo pt-5 ">LISTADO DE CICLOS FORMATIVOS</h3>
      
  </div>
</div>



<div class="row">
  <div class="table table-responsive">
    <table class="table table-bordered" id="table">
      <tr>
        <th width="150px">ID</th>
        <th>CICLO</th>
        <th>CENTRO</th>
        <th>TITULO</th>
        <th>AÑO</th>
        <th class="text-center" width="150px">
          <a href="#" class="create-modal btn btn-success btn-sm">
            <i class="glyphicon glyphicon-plus"></i>
          </a>
        </th>
      </tr>
      {{ csrf_field() }}
      {{ method_field('PATCH') }}
      <?php  $no=1; ?>
      @foreach ($formacion as $value)
        <tr class="post{{$value->id}}">
          <td>{{ $no++ }}</td>
          <td>{{ $value->ciclo }}</td>
          <td>{{ $value->centro }}</td>
          <td>{{ $value->titulo }}</td>
          <td>{{ $value->anio }}</td>
          <td>
            <a href="#" class="show-modal btn btn-info btn-sm" data-id="{{$value->id}}" data-ciclo="{{$value->ciclo}}" data-centro="{{$value->centro}}" data-titulo="{{$value->titulo}}" data-anio="{{$value->anio}}">
              <i class="fa fa-eye"></i>
            </a>
            <a href="#" class="edit-modal btn btn-warning btn-sm" data-id="{{$value->id}}" data-ciclo="{{$value->ciclo}}" data-centro="{{$value->centro}}" data-titulo="{{$value->titulo}}" data-anio="{{$value->anio}}">
              <i class="glyphicon glyphicon-pencil"></i>
            </a>
            <a href="#" class="delete-modal btn btn-danger btn-sm" data-id="{{$value->id}}" data-ciclo="{{$value->ciclo}}" data-centro="{{$value->centro}}" data-titulo="{{$value->titulo}}" data-anio="{{$value->anio}}">
              <i class="glyphicon glyphicon-trash"></i>
            </a>
          </td>
        </tr>
      @endforeach
    </table>
  </div>
  {{$formacion->links()}}
</div>
{{-- Modal Form Create formacion --}}
<div id="create" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
          <div class="form-group row add">
            <label class="control-label col-sm-2" for="ciclo">Ciclo :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="ciclo" name="ciclo"
              placeholder="Escriba su ciclo" required>
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="body">Centro :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="centro" name="centro"
              placeholder="Escriba su centro" required>
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="body">Titulo :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="titulo" name="titulo"
              placeholder="Escriba su centro" required>
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="body">Año :</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="anio" name="anio"
              required>
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>

          <div class="form-group">
        
           <input type="hidden" name="id_user" id="alumno" value="{{ Auth::user()-> id }}">                        
          </div>
        </form>
      </div>
          <div class="modal-footer">
            <button class="btn btn-warning" type="submit" id="add">
              <span class="glyphicon glyphicon-plus"></span>Guardar Formacion
            </button>
            <button class="btn btn-warning" type="button" data-dismiss="modal">
              <span class="glyphicon glyphicon-remobe"></span>Cerrar
            </button>
          </div>
    </div>
  </div>
</div></div>
{{-- Modal Form Show Formacion --}}
<div id="show" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
                  </div>
                    <div class="modal-body">
                    <div class="form-group">
                      <label for="">ID :</label>
                      <b id="i"/>
                    </div>
                    <div class="form-group">
                      <label for="">CICLO :</label>
                      <b id="ci"/>
                    </div>
                    <div class="form-group">
                      <label for="">CENTRO :</label>
                      <b id="ce"/>
                    </div>
                    <div class="form-group">
                      <label for="">TITULO :</label>
                      <b id="ti"/>
                    </div>
                    <div class="form-group">
                      <label for="">AÑO :</label>
                      <b id="an"/>
                    </div>
                    </div>
                    </div>
                  </div>
                  </div>

{{-- Modal Form Edit and Delete Formacion --}}
<div id="myModal"class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="modal">

          <div class="form-group">
            <label class="control-label col-sm-2"for="id">ID</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="fid" disabled>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2"for="ciclo">CICLO</label>
            <div class="col-sm-10">
            <input type="name" class="form-control" id="c">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2"for="centro">CENTRO</label>
            <div class="col-sm-10">
            <textarea type="name" class="form-control" id="cen"></textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2"for="centro">TITULO</label>
            <div class="col-sm-10">
            <textarea type="name" class="form-control" id="t"></textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2"for="anio">AÑO</label>
            <div class="col-sm-10">
            <textarea type="name" class="form-control" id="a"></textarea>
            </div>
          </div>
        </form>
                {{-- Form Delete Post --}}
        <div class="deleteContent">
          Are You sure want to delete <span class="title"></span>?
          <span class="hidden id"></span>
        </div>

      </div>
      <div class="modal-footer">

        <button type="button" class="btn actionBtn" data-dismiss="modal">
          <span id="footer_action_button" class="glyphicon"></span>
        </button>

        <button type="button" class="btn btn-warning" data-dismiss="modal">
          <span class="glyphicon glyphicon"></span>close
        </button>

      </div>
    </div>
  </div>
</div>
@endsection
