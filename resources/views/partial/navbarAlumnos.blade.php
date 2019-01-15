<div class="container p-2">


    <nav class="navbar navbar-expand-lg navbar-light bg-transparent  mt-4">
  <a class="navbar-brand " href="#">Alumnos:</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  @if( true || Auth::check() )
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class=" nav-link" href="#">Datos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Curriculum</a>
      </li>
  
      <li class="nav-item active">
        <a class="nav-link " href="#">Ofertas</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link " href="#">Candidaturas</a>
      </li>

    </ul>
    @endif
  </div>
</nav>