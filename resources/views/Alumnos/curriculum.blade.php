@extends('layouts.master')

@section('content')


@include('partial.navbarAlumnos')


<div class="text-left titulo  pt-5  pb-4">MI CURRICULUM</div>

    <div class="container">
        <div class="row footerMargin justify-content-center align-items-center ">
            
      
<div class="col-lg-6 col-sm-6 col-12 p-5 ">
    <h4>Subir archivo</h4>
<form class="form-inline center-block well" action="/" method="POST" enctype="multipart/form-data">
    <div class="input-group">
        <label id="browsebutton" class="btn btn-default input-group-addon" for="my-file-selector" style="background-color:white">
            <input id="my-file-selector" type="file" style="display:none;">
            Examinar...
        </label>
        <input id="label" type="text" class="form-control" readonly="">
    </div>
  <button type="submit" class="btn btn-success">Subir</button> 
  <span class="help-block">
<small id="fileHelp" class="form-text text-muted">Solo se permite PDF con tamaño inferior a 2MB.</small>
</span>

</form>
</div>
            </div>
        </div>
    </div>
@endsection