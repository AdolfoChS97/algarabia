<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <img id="AlgarabiaImg" src="img/logo/duo tono 1.png" class="d-inline-block align-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="NavBarAlgarabia" class="container">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-item nav-link active" href="#">INICIO<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link" href="#Nosotros">NOSOTROS</a>
                </li>
                <li class="nav-item dropdown"  id='dmenu'>
                    <a class="nav-link dropdown-toggle" href="#Tienda" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    TIENDA
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#Novedades">NOVEDADES</a>
                        <a class="dropdown-item" href="#Eventos">EVENTOS</a>
                        <a class="dropdown-item" href="#Productos">PRODUCTOS</a>
                        <a class="dropdown-item" href="#Servicios">SERVICIOS</a>
                        <a class="dropdown-item" href="#Mitalento">MI TALENTO</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link" href="#Galeria">GALERIA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link" href="#Contacto">CONTACTO</a>
                </li>
            </ul>
            @if (Route::has('login'))
                @auth
                    <div class="btn-group" role="group" aria-label="">
                        <a class=" btnH btn btn-secondary" role="button">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <a class=" btnH btn btn-secondary" role="button" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Cerrar sesión') }} </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>    
                    </div>

                    @else
                        <div class="btn-group" role="group" aria-label="">
                            <a class=" btnH btn btn-secondary" href="{{ route('login') }}" role="button">INGRESA</a>           
                    @if (Route::has('register'))
                            <a class=" btnH btn btn-secondary" href="{{ route('register') }}"role="button">REGISTRATE</a>   
                        </div>
                    @endif
                @endauth
            @endif
        </div>
    </div>
  </nav>
