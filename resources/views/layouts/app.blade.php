<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Crud</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">

<style>


li{
    list-style-type:none;
    padding:8px;
}

a{
    color:white;
}

a:hover{
    color:white;
    text-decoration:none;
}


</style>

  </head>
  <body>

  <div id="principal" class="container-fluid">
      <div class="row fondo">
          <img src="{{ asset('imagenes/logo.png') }}" alt="logo">
      </div>

<div class="container">
  @yield('content')
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
{{-- ajax Form Add Formacion--}}
  $(document).on('click','.create-modal', function() {
    $('#create').modal('show');
    $('.form-horizontal').show();
    $('.modal-title').text('Add Formacion');
  });
  $("#add").click(function() {
    $.ajax({
      type: 'POST',
      url: 'add',
      data: {
        '_token': $('input[name=_token]').val(),
        'ciclo': $('input[name=ciclo]').val(),
        'centro': $('input[name=centro]').val(),
        'titulo': $('input[name=titulo]').val(),
        'anio': $('input[name=anio]').val(),
        'id_alumno': $('input[name=id_user]').val(),
      },
      success: function(data){
        if ((data.errors)) {
          $('.error').removeClass('hidden');
          $('.error').text(data.errors.ciclo);
          $('.error').text(data.errors.centro);
          $('.error').text(data.errors.titulo);
          $('.error').text(data.errors.anio);
          $('.error').text(data.errors.id_alumno);
        } else {
          $('.error').remove();
          $('#table').append("<tr class='post" + data.id + "'>"+
          "<td>" + data.id + "</td>"+
          "<td>" + data.ciclo + "</td>"+
          "<td>" + data.centro + "</td>"+
          "<td>" + data.titulo + "</td>"+
          "<td>" + data.anio + "</td>"+
     
          "<td><button class='show-modal btn btn-info btn-sm' data-id='" + data.id + "' data-ciclo='" + data.ciclo + "' data-centro='" + data.centro + "' data-titulo='" + data.titulo + "' data-anio='" + data.anio + "' ><span class='fa fa-eye'></span></button> <button class='edit-modal btn btn-warning btn-sm' data-id='" + data.id + "' data-ciclo='" + data.ciclo + "' data-centro='" + data.centro + "' data-titulo='" + data.titulo + "' data-anio='" + data.anio + "'><span class='glyphicon glyphicon-pencil'></span></button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "' data-ciclo='" + data.ciclo + "' data-centro='" + data.centro + "' data-titulo='" + data.titulo + "' data-anio='" + data.anio + "'><span class='glyphicon glyphicon-trash'></span></button></td>"+
          "</tr>");
        }
      },
    });
    $('#ciclo').val('');
    $('#centro').val('');
    $('#titulo').val('');
    $('#anio').val('');
 
  });

// function Edit POST
$(document).on('click', '.edit-modal', function() {
$('#footer_action_button').text("Update Formacion");
$('#footer_action_button').addClass('glyphicon-check');
$('#footer_action_button').removeClass('glyphicon-trash');
$('.actionBtn').addClass('btn-success');
$('.actionBtn').removeClass('btn-danger');
$('.actionBtn').addClass('edit');
$('.modal-title').text('Formacion Edit');
$('.deleteContent').hide();
$('.form-horizontal').show();
$('#fid').val($(this).data('id'));
$('#c').val($(this).data('ciclo'));
$('#cen').val($(this).data('centro'));
$('#t').val($(this).data('titulo'));
$('#a').val($(this).data('anio'));
$('#myModal').modal('show');
});

$('.modal-footer').on('click', '.edit', function() {
  $.ajax({
    type: 'POST',
    url: 'edit',
    data: {
'_token': $('input[name=_token]').val(),
'id': $("#fid").val(),
'ciclo': $('#c').val(),
'centro': $('#cen').val(),
'titulo': $('#t').val(),
'anio': $('#a').val()
},
success: function(data) {
      $('.post' + data.id).replaceWith(" "+
      "<tr class='post" + data.id + "'>"+
      "<td>" + data.id + "</td>"+
      "<td>" + data.ciclo + "</td>"+
      "<td>" + data.centro + "</td>"+
      "<td>" + data.titulo + "</td>"+
      "<td>" + data.anio + "</td>"+
 "<td><button class='show-modal btn btn-info btn-sm' data-id='" + data.id + "' data-ciclo='" + data.ciclo + "' data-centro='" + data.centro + "' data-titulo='" + data.titulo + "' data-anio='" + data.anio + "'><span class='fa fa-eye'></span></button> <button class='edit-modal btn btn-warning btn-sm' data-id='" + data.id + "' data-ciclo='" + data.ciclo + "' data-centro='" + data.centro + "' data-titulo='" + data.titulo + "' data-anio='" + data.anio + "'><span class='glyphicon glyphicon-pencil'></span></button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "' data-ciclo='" + data.ciclo + "' data-centro='" + data.centro + "' data-titulo='" + data.titulo + "' data-anio='" + data.anio + "'><span class='glyphicon glyphicon-trash'></span></button></td>"+
      "</tr>");
    }
  });
});


// form Delete function
$(document).on('click', '.delete-modal', function() {
$('#footer_action_button').text(" Delete");
$('#footer_action_button').removeClass('glyphicon-check');
$('#footer_action_button').addClass('glyphicon-trash');
$('.actionBtn').removeClass('btn-success');
$('.actionBtn').addClass('btn-danger');
$('.actionBtn').addClass('delete');
$('.modal-title').text('Delete Post');
$('.id').text($(this).data('id'));
$('.deleteContent').show();
$('.form-horizontal').hide();
$('.title').html($(this).data('title'));
$('#myModal').modal('show');
});

$('.modal-footer').on('click', '.delete', function(){
  $.ajax({
    type: 'POST',
    url: 'delete',
    data: {
      '_token': $('input[name=_token]').val(),
      'id': $('.id').text()
    },
    success: function(data){
       $('.post' + $('.id').text()).remove();
    }
  });
});

  // Show function
  $(document).on('click', '.show-modal', function() {
  $('#show').modal('show');
  $('#i').text($(this).data('id'));
  $('#ci').text($(this).data('ciclo'));
  $('#ce').text($(this).data('centro'));
  $('#ti').text($(this).data('titulo'));
  $('#an').text($(this).data('anio'));
  $('.modal-title').text('Show Formacion');
  });
</script>
  </body>
</html>
