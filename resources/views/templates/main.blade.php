<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- metadatos --}}
    @include('layouts.partials.meta')
</head>
<body>
    <!-- inicio del header -->
    @include('layouts.partials.header')
    <!-- fin del header -->
    <div class="Inicio">
        <div class="ContInicio">
            <div class="landing-text">
                <div class="subTitulo">PRODUCCIÓN Y ESPECTÁCULO</div>
                <div class="Alagarabia">ALGARABÍA</div>
                <img id="nuevo-logo" src="img/logo/NUEVO-LOGO-ALGARABÍA.png">
                <div class="container">
                    <div class="Cuadro carousel">
                        <div class="slice">
                            <div class="row">
                                <div class="col-sm-4 libro">
                                    <img id="Libro" src="img/inicio/OJK9411.png">
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <h4>SECRETOS DE UNA DAMA<br><b>ADQUIÉRELO YA!</b></h4>
                                    </p>
                                    <div class="zoom">
                                        <a href="#">
                                            <img id="LogoUphold" src="img/inicio/uphold.png">
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="zoom">
                                            <a href="#">
                                                <img id="LogoAmazon" src="img/inicio/Amazon.png">
                                            </a>
                                        </div>
                                        <div class="zoom">
                                            <a href="#">
                                                <img id="LogoMercado" src="img/inicio/Mercado Libre.png">
                                            </a>        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="Nosotros"></div>
    <div class="Nosotros container">
        <h3>NOSOTROS</h3>
        <div class="Custom-underline">&nbsp;</div>
    </div>
    <div class="paddingNosotros">
        <div class="container">
            <div class="row ContInfo">
                <div class="col-sm-6">
                    <div class="CuadroNegro">
                        <img id="Mision" src="img/nosotros/Mision2.png">
                        <p class="Flotante">
                            <b class="Valores">MISIÓN</b>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <p> <b class="texValor overlay">
                            Promover el talento venezolano en sus diferentes 
                            expresiones artísticas, como canto y actuación, 
                            logrando de estar manera crear productos comerciales tales como: 
                            obras de teatro, animaciones, música, Djs, promotoras y eventos 
                            exclusivos, que permitan destacar nuestras las destrezas como productora
                        </b>  
                    </p>
                </div>
            </div>
            <br>
            <div class="row ContInfo">
                <div class="col-sm-6">
                    <div class="CuadroNegro">
                        <img id="Vision" src="img/nosotros/Vision.png">
                        <p class="Flotante">
                            <b class="Valores">VISIÓN</b>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <p> <b class="texValor overlay">
                            Posicionar la marca Algarabía Producciones en Venezuela 
                            y parte de Latinoamérica como una plataforma líder en la 
                            producción de espectáculos y entretenimiento, destacando además 
                            la promoción y representación del talento emergente en sus 
                            diferentes áreas artísticas, creando productos comerciales con 
                            calidad de exportación para el disfrute de la gente. 
                        </b>  
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="padingTienda">
        <div id="Tienda">
            <div class="container tienda">
                <h3>TIENDA</h3>
                <div class="Custom-underline">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-2">
                        <div id="Novedades">
                            <ul> 
                                <li><h4>Novedades</h4></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div id="Novedades">
                            <ul> 
                                <div class="Custom-underlineLibro"><h4><b>Libros</b></h4></div>
                                @if (Route::has('login'))
                                @auth
                                <button data-toggle="modal" data-target="#comprar" type="button" class="btn btn1">
                                    COMPRAR
                                </button>
                                @else
                                <a id="btn-inicio" class="btn btn1" href="{{ route('login') }}">INICIAR SESIÓN</a>
                                @endauth
                                @endif
                            </ul>
                            <ul>
                                <button type="button" class="btn btn1" data-toggle="modal" data-target="#exampleModalScrollable">
                                    LEER MÁS
                                </button>
                            </ul>
                            <!--Inicio de modales con imagenes -->
                            <div class="modal fade modalGale" id="comprar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="row text-center">
                                                <div class="col-sm-2 justify-content-center">
                                                    <img id="Compra" class="img-thumbnail" src="img/inicio/OJK9411.png">
                                                </div>
                                                <div class="col-sm-10">
                                                    <h4 class="black-text text-uppercase">Secretos de una dama</h4>
                                                </div>
                                            </div>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body black-text">
                                            <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <h5 class="text-uppercase text-center">Escoja su versión</h5>
                                                    <select id="versiones" class="form-control" name="versiones" required>
                                                        <option value="" selected="selected">
                                                            Seleccionar
                                                        </option>
                                                        @foreach($libros as $categoria)
                                                        <option id="{{$categoria->grupo_id }}" value="{{ $categoria->grupo_id }}">
                                                            {{ $categoria->nom_grupo }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="digitales text-center" style="display: none;">
                                                    <form action="{{ action('ComprasController@store')}}" method="POST">
                                                        @csrf
                                                        <div class="form-group">
                                                            <input class="form-control" type="hidden" name="elemento_id" value="1">
                                                            @auth
                                                                <input class="form-control" type="hidden" name="persona_id" value="{{ Auth::user()->id }}">
                                                            @endauth
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="desc_producto">Descripción</label>
                                                            <textarea class="form-control" name="desc_producto" cols="15" rows="3" readonly >Novela de drama y suspenso. Escrita por Franklin Bullones digitalizada en formato PDF.</textarea> 
                                                        </div> 
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label for="cant_total_productos">Cantidad</label>
                                                                    <input class="form-control" type="number" name="cant_total_productos" min="1" max="5">
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label for="precio">Precio $</label>
                                                                    <input class="form-control" type="number" name="precio" value="2.8" readonly>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label for="precio">Precio Bs.S</label>
                                                                    <input class="form-control" type="number" name="precioDigital" value="{{$totalDigital}}" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                         
                                                        <input class="form-control" type="hidden" name="entrega" value="nula"> 
                                                        <div class="modal-footer justify-content-center">
                                                            <button type="button" class="btn btn btn-light rounded-pill" data-dismiss="modal">CERRAR</button>
                                                            <input type="submit" class="btn btn btn-success 
                                                            rounded-pill" value="COMPRAR">
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="impresos text-center" style="display: none;">
                                                    <form action="{{ action('ComprasController@store')}}" method="POST">
                                                        @csrf
                                                        <div class="form-group">
                                                            <input class="form-control" type="hidden" name="elemento_id" value="2">
                                                            @auth
                                                                <input class="form-control" type="hidden" name="persona_id" value="{{ Auth::user()->id }}">
                                                            @endauth
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="desc_producto">Descripción</label>
                                                            <textarea class="form-control" name="desc_producto" cols="15" rows="3" readonly >Novela de drama y suspenso. Escrita por Franklin Bullones en su version empastada.</textarea>
                                                        </div> 
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label for="cant_total_productos">Cantidad</label>
                                                                    <input class="form-control" type="number" name="cant_total_productos" min="1" max="5">
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label for="precio">Precio $</label>
                                                                    <input class="form-control" type="number" name="precio" value="12" readonly>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label for="precio">Precio Bs.S</label>
                                                                    <input class="form-control" type="number" name="precioFisico" value="{{$totalFisico}}" readonly>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="form-group">
                                                            <label for="entrega">Método de entrega</label>
                                                            <select class="form-control" name="entrega" required>
                                                                <option value="" selected="selected">
                                                                    Seleccionar
                                                                </option>
                                                                <option value="Entrega personal">Entrega personal</option>
                                                                <option value="Envio por encomienda">Envío por encomienda</option>
                                                            </select>
                                                        </div> 
                                                        <div class="modal-footer justify-content-center">
                                                            <button type="button" class="btn btn btn-light rounded-pill" data-dismiss="modal">CERRAR</button>
                                                            <input type="submit" class="btn btn btn-primary 
                                                            rounded-pill" value="ENVIAR">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>                                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade bd-example-modal-xl" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content LibroModal">
                                <div class="modal-header">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link" id="Sinopsis">SINOPSIS</a>
                                            <a class="nav-item nav-link" id="Prologo" >PRÓLOGO</a>
                                        </div>
                                    </nav>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div id="ContenidoLibro"></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <video id="videoNovedades" controls>
                        <source src="img/tienda/LIBRO NOVELA2.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
            <div class="container eventos">
                <div class="Eventos">
                    <div class="row">
                        <div class="col-sm-2">
                            <div id="Eventos">
                                <ul> 
                                    <li><h4>Eventos</h4></li>
                                     <div class="Custom-underlineEvent"><a class="opcion" id="Conciertos"><h4>Conciertos</h4></a></div>
                                     <div class="Custom-underlineEvent"><a class="opcion" id="Obras" ><h4>Obras</h4></a></div>
                                     <div class="Custom-underlineEvent"><a class="opcion" id="Monologos" ><h4>Monólogos</h4></a></div>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div id="">
                                <ul> 
                                    <div class="Custom-underlineFechas"><h4><b>30/11/2018</b></h4></div>
                                    <br> 
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div id="mi-aside"><img id="ImgDj" src="img/tienda/Eventos.png"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container productos">
                <div class="Productos">
                    <div class="row">
                        <div class="col-sm-2">
                            <div id="Productos">
                                <ul> 
                                    <li><h4>Productos</h4></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <ul>                                    
                                <div class="Custom-underlineProduc"><a class="Productos TipoProductos" id="Camisas"><h4>Camisas</h4></a></div>
                                <div class="Custom-underlineProduc"><a class="Productos TipoProductos" id="Gorras"><h4>Gorras</h4></a></div>
                                <div class="Custom-underlineProduc"><a class="Productos TipoProductos" id=""><h4>Chaquetas</h4></a></div>
                            </ul>
                        </div>
                        <div class=" col-sm-8">
                            <div class="prodCarusel">
                                <div class="carousel2">
                                    <div id="OptProducto">
                                        <div class="items l"> <img id="Shirt" src="img/tienda/camisa1.png"></div>
                                        <div class="items m"> <img id="Shirt" src="img/tienda/camisa2.png"></div>
                                        <div class="items n"> <img id="Shirt" src="img/tienda/camisa3.png"></div>
                                        <div class="items ñ"> <img id="Shirt" src="img/tienda/camisa1.png"></div>
                                        <div class="items o"> <img id="Shirt" src="img/tienda/camisa2.png"></div>
                                        <div class="items p"> <img id="Shirt" src="img/tienda/camisa3.png"></div>
                                    </div>
                                </div>
                            </div>  
                            <button type="button" class="btn next"><i class="fa fa-angle-double-right"></i></button>
                            <button type="button" class="btn prev"><i  class=" fa fa-angle-double-left"></i> </button> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="container servicios">
                <div class="Servicios">
                    <div class="row">
                        <div class="col-sm-2">
                            <div id="Servicios">
                                <ul> 
                                    <li><h4>Servicios</h4></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div id="">
                                <ul>
                                    <div class="Custom-underlineServ"><a class="opcionServicio TipoProductos" id="Dj"><h4><b>Dj's</b></h4></a></div>                                 
                                    <div class="Custom-underlineServ"><a class="opcionServicio TipoProductos" id="Cantantes"><h4>Cantantes</h4></a></div>
                                    <div class="Custom-underlineServ"><a class="opcionServicio TipoProductos" id="Promotoras"><h4>Promotoras</h4></a></div>
                                    <div class="Custom-underlineServ"><a class="opcionServicio TipoProductos" id="Animaciones"><h4>Animaciones</h4></a></div>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div id="OptServicio"><img id="ImgDj" src="img/tienda/Dj.png"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="conttienda">
                <div class="container talento">
                    <div class="Talento">                 
                        <div class="row">
                            <div class="col-sm-2">
                                <div id="Talento">
                                    <ul> 
                                        <li><h4>Mi Talento</h4></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div id="">
                                    <ul>
                                         <div class="Custom-underlineTale"><a class="opcionTalento TipoProductos"  id="Canto"><h4><b>Canto</b></h4></a></div>                                     
                                         <div class="Custom-underlineTale"><a class="opcionTalento TipoProductos"  id="Bailo"><h4>Bailo</h4></a></div>
                                         <div class="Custom-underlineTale"><a class="opcionTalento TipoProductos"  id="Actuo"><h4>Actuo</h4></a></div>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div id="OptTalento">
                                    <h5>¿Posees algún talento?<br><br>
                                        Algarabía producciones tiene la mejor plataforma para mostrar tus destrezas.<br><br>
                                        ¡NO LO PIENSES MÁS!
                                    </h5>
                                    <p>
                                        Llegó la hora de mostrarle al mundo tu talento. Realiza un vídeo de un minuto que refleje tu pasión y envíalo a nuestro correo: <a href="">algarabiaproduccionesvzla@gmail.com</a> y forma parte de TALENTO ALGARABÍA.
                                        ¿Qué esperas?
                                        Una vez que envíes tu material de video nuestro equipo lo evaluará y subirá a nuestra plataforma. El siguiente paso será buscar tu vídeo en la categoría correspondiente: Canto, Baile o Actuación.
                                        Tu trabajo consistirá a difundir que tu vídeo está en línea.
                                        En Algarabía Producciones estamos esperando por ti.<br><br><br><br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
<div id="Galeria"></div>
<div class="container Galeria">
    <h3>GALERÍA</h3>
    <div class="Custom-underline">&nbsp;</div>
    <div class="galeria">
        <a  data-toggle="modal" data-target="#Modal1">
            <img class="img-fluid" src="img/galeria/Galeria 1.png">
        </a>
        <a  data-toggle="modal" data-target="#Modal2">
            <img class="img-fluid" src="img/galeria/Galeria 2.png">
        </a>
        <a  data-toggle="modal" data-target="#Modal3">
            <img class="img-fluid" src="img/galeria/Galeria 3.png">
        </a>
        <a  data-toggle="modal" data-target="#Modal4">
            <img class="img-fluid" src="img/galeria/Galeria 1 - MENOS TAMAÑO (3).png">
        </a>
    </div>
</div>
<!--Inicio de modales con imagenes -->
<div class="modal fade modalGale" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row text-center">
                    <div class="col-sm-12">
                        <h4 class="modal-title" id="exampleModalLabel">LIBRO</h4>
                    </div>
                    <div class="col-sm-12">
                        <h4>Secretos de una dama</h4>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img class="img-fluid" src="img/galeria/1.png">
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn btn-light rounded-pill" data-dismiss="modal">CERRAR</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade modalGale" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row text-center">
                    <div class="col-12">
                        <h4 class="modal-title" id="exampleModalLabel">OBRA</h4>
                    </div>
                    <div class="col-12">
                        <h4>Quien dijo que el sexo</h4>
                        <h4>es solo para jóvenes</h4>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img class="img-fluid" src="img/galeria/2.png">
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn btn-light rounded-pill" data-dismiss="modal">CERRAR</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade  modalGale" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center" id="exampleModalLabel">Juan Miguel  -  CONCIERTO</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <video controls class="videoModal1 img-fluid
                ">
                    <source src="img/galeria/video2.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn btn-light rounded-pill" data-dismiss="modal">CERRAR</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modalGale" id="Modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Janny Urdaneta  -  CANTANTE</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid" src="img/galeria/4.png">
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn btn-light rounded-pill" data-dismiss="modal">CERRAR</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div id="Contacto" class="row">
            <div class="col-12 Seccion4">
                <div class="row">
                    <div class="col-6"></div>
                    <div id="FormContacto" class="col-6">
                        <h3 class="text-center text-uppercase">CONTáCTANOS</h3>
                        <form method="POST" id="contacto" name="contacto" action="{{ action('ContactosController@sendMessage') }}" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <input class="form-control inputTransparent" id="nombre" name="nombre" type="text" placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control inputTransparent" id="correo" name="correo" type="email" placeholder="Correo" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control inputTransparent" id="asunto" name="asunto" type="text" placeholder="Asunto" required>
                            </div>
                            <div class="form-group">
                                <label for="comentario">Escribe tu mensaje:</label>
                                <textarea id="comentario" name="comentario" class="form-control inputTransparent" rows="5" required>
                                </textarea>
                            </div>
                            <div class="form-group text-center">
                                <input class="InputSubmit" type="submit" id="enviar" value="ENVIAR">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container-fluid">
    <div id="Footer" class="row">
        <div class="col-12">
            <img id="Manos" class="Icono" src="../img/galeria/izquierda.png">
            <a href="#" target="_blank">
                <img id="Redes" class="Icono" src="../img/galeria/Instagram.png">
            </a>
            <a href="#" target="_blank">
                <img id="Redes" class="Icono" src="../img/galeria/Facebook.png">
            </a>
            <a href="#" target="_blank">
                <img id="Redes" class="Icono" src="../img/galeria/Google Map.png">
            </a> 
            <img id="Manos" class="Icono" src="../img/galeria/derecha.png">
        </div>
    </div>
</div>
<div class="alert">
    @include('flash::message')
</div>
@include('layouts.partials.footer')
</body>
</html>