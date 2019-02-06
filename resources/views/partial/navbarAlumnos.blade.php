<div class="container p-2">


  <nav class="navbar navbar-expand-lg navbar-light bg-transparent navborder  mt-4">
    <a class="navbar-brand font-weight-bold" href="#">Alumnos:</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        @if( true || Auth::check() )
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
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
</div>

