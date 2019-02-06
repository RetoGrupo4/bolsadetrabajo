<div class="container p-2">


  <nav class="navbar navbar-expand-lg navbar-light bg-transparent navborder  mt-4">
    <a class="navbar-brand font-weight-bold" href="#">Administrador:</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        @if( true || Auth::check() )
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            

            <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"  aria-expanded="false">Alumnos</a>
            <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{url('alumno')}}">Lista de alumnos</a>
                  <a class="dropdown-item" href="{{url('#')}}">Nuevo alumno</a>
                  

                  </li>


            <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"  aria-expanded="false">Empresa</a>
            <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{url('empresas')}}">Lista de empresas</a>
                  <a class="dropdown-item" href="{{url('empresas/create')}}">Nueva empresa</a>
 

                  </li>


            

            <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"  aria-expanded="false">Ofertas</a>
            <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{url('ofertas/lista')}}">Lista de ofertas</a>
                  <a class="dropdown-item" href="{{url('ofertas/create')}}">Nueva oferta</a>
        
             
            </li>
            
               


                <li class="nav-item active">
                   <a class="nav-item nav-link text-white" href="{{url('logout')}}">Salir</a>               
                 </li>

            </ul>
                 
        </div>
        @endif
  </nav>
</div>

