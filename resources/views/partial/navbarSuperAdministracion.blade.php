<div class="container p-2">


  <nav class="navbar navbar-expand-lg navbar-light bg-transparent navborder  mt-4">
    <a class="navbar-brand font-weight-bold" href="#">Super administrador:</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        @if( true || Auth::check() )
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            

            <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"  aria-expanded="false">Adminitradores</a>
            <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{url('admin')}}">Lista de adminitradores</a>
                  <a class="dropdown-item" href="{{url('admin/create')}}">Nuevo administrador</a>
                  <a class="dropdown-item" href="{{url('admin/show/1')}}">Visualizar administrador</a>

                  </li>


            <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"  aria-expanded="false">Departamentos</a>
            <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{url('departamento')}}">Lista de departamentos</a>
                  <a class="dropdown-item" href="{{url('departamento/create')}}">Nueva departamentos</a>
                  <a class="dropdown-item" href="{{url('departamento/show/1')}}">Visualizar departamentos</a>

                  </li>


            

            <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"  aria-expanded="false">Ciclos</a>
            <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{url('ciclo')}}">Lista de ciclos</a>
                  <a class="dropdown-item" href="{{url('ciclo/create')}}">Nueva ciclos</a>
                  <a class="dropdown-item" href="{{url('ciclo/show/1')}}">Visualizar ciclos</a>
             
            </li>
            
               

                <li class="nav-item active">
                      <a class="nav-link text-white" href="">Historial</a>
                </li>

                <li class="nav-item active">
                   <a class="nav-item nav-link text-white" href="{{url('logout')}}">Salir</a>               
                 </li>

            </ul>
                 
        </div>
        @endif
  </nav>
</div>

