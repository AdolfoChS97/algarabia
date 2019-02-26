<script type="text/javascript">
  $(document).ready(function () {
  var components = {
    Sinopsis: {
      template: `
      Nunca imaginó lo que la vida le tenía deparado, 
      siempre pensaba que mientras más unidos estaban, 
      nada malo les sucedería. La fatalidad la sorprendió, llegó de la nada, 
      ese incidente apagó una luz que la acompañaba. 
      Momentos de soledad y noches oscuras entristecían su mirada ausente, 
      sus ojos no decían nada, sólo un profundo dolor transmitía.<br><br>
      Decisiones difíciles fueron tomadas, era todo o nada, acciones que marcaban la vida de alguien de forma inesperada, precio que le fue impuesto y ella decidió pagar. 
      Su vida fue tomando fuerza, aunque no del todo, vivía a escondidas, lejos de la sociedad, cada vez que salía a la calle ocultaba su rostro, 
      aún temía enfrentarse ante el mundo, aunque eso no le impedía seducir a los demás.<br><br> 
      Su secreto nadie lo sabía, temía regresar a su soledad, 
      noches de llantos que la hacían recordar por qué seguía, ese recuerdo era su fuerza, lo que la mantenía viva, y pensar en revelarlo era saber que nadie entendería, 
      los Secretos de una Dama.
      `
    },
    Prologo: {
      template: `
      La historia que tienes en tus manos y que estas a punto de abordar, te va a sorprender muchísimo. Es ficticia, pero está inundada de tanta verdad y tanto realismo que quedarás enganchado desde el comienzo. 
      Es una obra de amor, amor de pareja, amor propio, pero no es la clásica historia de amor, de clásica no tiene nada, es original, única y actualizada.<br><br>
      Secretos de una Dama, narra la historia de Selena, una joven mujer, común, normal, como tú y como yo, que de la noche a la mañana enfrentará las vicisitudes que le ofrece la vida, y que la hacen sentir desdichada, malquerida e incluso culpable.<br><br>
      La vida de Selena transcurre por diversos acontecimientos que la llevan a formar una personalidad al principio rebelde, y posteriormente sumisa y con escasa autoestima. Durante su niñez y adolescencia sufre de conflictos que quebrantan el amor familiar y sus ilusiones infantiles. En su juventud experimenta la soledad, el sentimiento de culpa, el amor y el tan poco deseado sentimiento de desamor y desprecio.<br><br>
      El autor nos relata una exquisita obra, escrita de forma no lineal. Con cada capítulo te enfrentarás a una historia diferente, que al final se entrelazará para darle sentido a todo lo que la protagonista sintió y que te llevará a conocer lo que es capaz de hacer una persona para guardar un secreto, SU SECRETO. Además de la crueldad que atropella y tiene que enfrentar una dama en el mundo real. 
      Es una historia de amor y terror, que aborda el tema auto-aceptación, autoestima y tolerancia, así como de relaciones personales y familiares.<br><br>
      Franklin Bullones es un verdadero artista, auténtico, original, capaz de llevarte a experimentar suspenso, terror, compasión y amor en una sola obra. Escribe con tanta pasión, que fácilmente puedes sentir e imaginar el erotismo y el dolor que padece la joven protagonista en carne propia a lo largo de su historia.<br><br>
      Los invito a preguntarse “¿qué serían capaces de hacer para mantener vivo un recuerdo?” y finalmente a descubrir: Secretos de una Dama.<br><br>
      Dra. Ana K. Randelli G.<br>
      @randelliana<br>
      Cirujano plástico, amiga y critica del Autor<br>
      `,

    }
    
  };
  function renderComponent(element, componentName) {
    var component = components[componentName];
    element.html(component.template);
    component.controller(element);
  }
  $('a.nav-item').click(function () {
  
    var aside = $('#ContenidoLibro');
    renderComponent(aside, this.id);
  });
  });
  </script>

<script type="text/javascript">
      $('#flash-overlay-modal').modal(); 
</script>


<script type="text/javascript">
  window.addEventListener("load", function() {
    contacto.nombre.addEventListener("keypress", soloLetras, false);
  });

//Solo permite introducir letras.
function soloLetras(e){
  var regex = new RegExp("^[a-zA-Z ]+$");
  var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
  if (!regex.test(key)) {
  event.preventDefault();
  return false;
}
}
</script>
<script type="text/javascript">
  window.addEventListener("load", function() {
    contacto.asunto.addEventListener("keypress", soloLetras, false);
  });

//Solo permite introducir letras.
function soloLetras(e){
  var regex = new RegExp("^[a-zA-Z ]+$");
  var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
  if (!regex.test(key)) {
  event.preventDefault();
  return false;
}
}
</script>


<script type="text/javascript">
  $(document).ready(function () {
  var components = {
    Dj: {
      template:`
        <div>
          <img id="ImgDj" src="img/tienda/Dj.png">
        </div>
      `,
      controller: function (element) {
        element.find('img').css('transition: all 2s');
      }
    },
    Conciertos: {
      template:`
        <div>
          <img id="ImgDj" src="img/tienda/Eventos.png">
        </div>
      `,
      controller: function (element) {
        element.find('span').css('color', 'red');
      }
    },
    Obras: {
      template: `
      <nav class="nav-eventos">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="pildoEven  nav-link active" id="nav-INFO-tab" data-toggle="tab" href="#nav-INFO" role="tab" aria-controls="nav-INFO" aria-selected="true">INFO</a>
          <a class="pildoEven  nav-link" id="nav-SINOPSIS-tab" data-toggle="tab" href="#nav-SINOPSIS" role="tab" aria-controls="nav-SINOPSIS" aria-selected="false">SINOPSIS</a>
          <a class="pildoEven  nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">IMAGENES</a>
        </div>
      </nav>
      <div class="tab-content nav-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-INFO" role="tabpanel" aria-labelledby="nav-INFO-tab">
          <h4>¿Quién dijo que el sexo es solo para jóvenes?</h4>
            <h5>La experiencia viene con el tiempo, con los encuentros, aciertos y desaciertos, la creativhqidad debe traspasar los límites de la imaginación, explorando sensaciones que creemos prohibidas.</h5><br>
            <p>FICHA DE PRODUCCIÓN:
              GENERO: COMEDIA
              ESCRITA POR: FRANKLIN BULLONES<br>
              PRODUCCIÓN: ALGARABÍA PRODUCCIONES<br>
              ASISTENCIA DE PRODUCCIÓN: DANIEL BENAVIDES / DAISY POLO<br>
              DIRECCIÓN: FRANKLIN BULLONES<br>
              ELENCO: ÁNGEL ÁVILA (@ANGELAVILA27)<br>
              FRANKLIN BULLONES (@FRANCONK23)<br>
              PERSONAJES: MAMAÍTA Y TURRAJON <br>
              </p><br><br>
        </div>
        <div class="tab-pane fade" id="nav-SINOPSIS" role="tabpanel" aria-labelledby="nav-SINOPSIS-tab">
          <h5>
              Entre el odio y el amor, están Mamaíta y Turrajon. La sala de una casa es el lugar idóneo para entablar una conversación. Mucho se comenta que, cuando se llega a cierta edad, se pierde el conocimiento de temas que mueven nuestras fibras. 
              Sin embargo, para ellos, parece no importarle que sus cuerpos ya no aguanten un resfrío y logran a través de anécdotas que van desde cómo somos en el sexo, las posiciones, los orgasmos, hacernos ver que siempre habrá algo de lo que podemos aprender. 
              No son esposos ni hermanos, parecen perros y gatos, se odian, se quieren y hasta preferirían no ver uno al otro, pero sus locuras y ocurrencias equilibran su existencia.<br><br><br><br><br><br>
          </h5>
        </div>
        <div class="tab-pane carru-event fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner carou1">
              <div class="carousel-item active">
                <img id="ImgDj" src="img/tienda/Obra.PNG">
              </div>
              <div class="carousel-item">
                <img id="ImgDj" src="img/tienda/foto1.PNG">
              </div>
              <div class="carousel-item">
                <img id="ImgDj" src="img/tienda/foto2.PNG">
              </div>
              <div class="carousel-item">
                <img id="ImgDj" src="img/tienda/foto3.PNG">
              </div>
              <div class="carousel-item">
                <img id="ImgDj" src="img/tienda/foto4.PNG">
              </div>
              <div class="carousel-item">
                <img id="ImgDj" src="img/tienda/foto5.PNG">
              </div>
              <div class="carousel-item">
                <img id="ImgDj" src="img/tienda/foto6.PNG">
              </div>
              <div class="carousel-item">
                <img id="ImgDj" src="img/tienda/foto7.PNG">
              </div>
              <div class="carousel-item">
                <img id="ImgDj" src="img/tienda/foto8.PNG">
              </div>
              <div class="carousel-item">
                <img id="ImgDj" src="img/tienda/foto9.PNG">
              </div>
              <div class="carousel-item">
                <img id="ImgDj" src="img/tienda/fot10.PNG">
              </div>
              <div class="carousel-item">
                <img id="ImgDj" src="img/tienda/foto11.PNG">
              </div>
              <div class="carousel-item">
                <img id="ImgDj" src="img/tienda/foto12.PNG">
              </div>
              <div class="carousel-item">
                <img id="ImgDj" src="img/tienda/foto13.PNG">
              </div>
              <div class="carousel-item">
                <img id="ImgDj" src="img/tienda/foto14.PNG">
              </div>
              <div class="carousel-item">
                <img id="ImgDj" src="img/tienda/foto19.PNG">
              </div>
              <div class="carousel-item">
                <img id="ImgDj" src="img/tienda/foto21.PNG">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      `,
      controller: function (element) {
        element.find('a').css('color', 'white');
      }
    },
    Monologos: {
      template: `
        <div id="carouselExampleControls" class="carousel slide carou2" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img id="ImgDj" src="img/tienda/Monologo.PNG">
            </div>
            <div class="carousel-item">
                <img id="ImgDj" src="img/tienda/foto15.PNG">
            </div>
            <div class="carousel-item">
                <img id="ImgDj" src="img/tienda/foto16.PNG">
            </div>
            <div class="carousel-item">
                <img id="ImgDj" src="img/tienda/foto17.PNG">
            </div>
            <div class="carousel-item">
                <img id="ImgDj" src="img/tienda/foto20.PNG">
            </div>
          </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      `,
      controller: function (element) {
        element.find('pre').css('color', 'green');
      }
    }
  };
  function renderComponent(element, componentName) {
    var component = components[componentName];
    element.html(component.template);
    component.controller(element);
  }
  $('a.opcion').click(function () {
  
    var aside = $('#mi-aside');
    renderComponent(aside, this.id);
  });
  });
  </script>
  
  
  <script type="text/javascript">
  
    $(document).ready(function () {
    var components = {
      Dj: {
        template:`
          <div>
            <img id="ImgDj" src="img/tienda/Dj.png">
          </div>
        `,
        controller: function (element) {
          element.find('span').css('color', 'red');
        }
      },
      Cantantes: {
        template:`
          <div>
            <img id="ImgDj" src="img/tienda/Cantante.png">
          </div>
        `,
        controller: function (element) {
          element.find('span').css('color', 'red');
        }
      },
      Promotoras: {
        template: `
          <div>
            <img id="ImgDj" src="img/tienda/Protocolo.PNG">
          </div>
        `,
        controller: function (element) {
          element.find('h1').css('color', 'blue');
        }
      },
      Animaciones: {
        template: `
          <div>
            <img id="ImgDj" src="img/tienda/Animaciones.PNG">
          </div>
        `,
        controller: function (element) {
          element.find('pre').css('color', 'green');
        }
      }
    };
    function renderComponent(element, componentName) {
      var component = components[componentName];
      element.html(component.template);
      component.controller(element);
    }
    $('a.opcionServicio').click(function () {
    
      var aside = $('#OptServicio');
      renderComponent(aside, this.id);
    });
    });
    </script>
  
  <script type="text/javascript">
    $(document).ready(function () {
    var components = {
      Canto: {
        template:`
          <div>
            <img id="ImgDj" src="img/tienda/Canto.png">
          </div>
        `,
        controller: function (element) {
          element.find('span').css('color', 'red');
        }
      },
      Bailo: {
        template:`
          <div>
            <img id="ImgDj" src="img/tienda/Bailo.png">
          </div>
        `,
        controller: function (element) {
          element.find('span').css('color', 'red');
        }
      },
      Actuo: {
        template: `
          <div>
            <img id="ImgDj" src="img/tienda/Actuo.PNG">
          </div>
        `,
        controller: function (element) {
          element.find('h1').css('color', 'blue');
        }
      },
    };
    function renderComponent(element, componentName) {
      var component = components[componentName];
      element.html(component.template);
      component.controller(element);
    }
    $('a.opcionTalento').click(function () {
    
      var aside = $('#OptTalento');
      renderComponent(aside, this.id);
    });
    });
    </script>
  
  
  <script type="text/javascript">
    $(document).ready(function () {
    var components = {
  
      Camisas: {
        template:`
        <div class="items l"> <img id="Shirt" src="img/tienda/camisa1.png"></div>
        <div class="items m"> <img id="Shirt" src="img/tienda/camisa2.png"></div>
        <div class="items n"> <img id="Shirt" src="img/tienda/camisa3.png"></div>
        <div class="items ñ"> <img id="Shirt" src="img/tienda/camisa1.png"></div>
        <div class="items o"> <img id="Shirt" src="img/tienda/camisa2.png"></div>
        <div class="items p"> <img id="Shirt" src="img/tienda/camisa3.png"></div>
        
 
        `,
        controller: function (element) {
          element.find('span').css('color', 'red');
        }
      },
      Gorras: {
        template: `
        <div class="items l"> <img id="Shirt" src="img/tienda/Gorra1.png"></div>
        <div class="items m"> <img id="Shirt" src="img/tienda/Gorra2.png"></div>
        <div class="items n"> <img id="Shirt" src="img/tienda/Gorra3.png"></div>
        <div class="items ñ"> <img id="Shirt" src="img/tienda/1.png"></div>
        <div class="items o"> <img id="Shirt" src="img/tienda/2.png"></div>
        <div class="items p"> <img id="Shirt" src="img/tienda/3.png"></div>
        `,
        controller: function (element) {
          element.find('div').css('color', 'blue');
        }
      },
    };
    function renderComponent(element, componentName) {
      var component = components[componentName];
      element.html(component.template);
      component.controller(element);
    }
    $('a.Productos').click(function () {
    
      var aside = $('#OptProducto');
      renderComponent(aside, this.id);
    });
    });
    </script>
<script type="text/javascript">
	$('.carousel').slick({
		dots: true,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear',
		arrows: false,
	});
</script>

<script type="text/javascript">
var carousel2 = $(".carousel2"),
    currdeg  = 0;

$(".next").on("click", { d: "n" }, rotate);
$(".prev").on("click", { d: "p" }, rotate);

function rotate(e){
  if(e.data.d=="n"){
    currdeg = currdeg - 60;
  }
  if(e.data.d=="p"){
    currdeg = currdeg + 60;
  }
  carousel2.css({
    "-webkit-transform": "rotateY("+currdeg+"deg)",
    "-moz-transform": "rotateY("+currdeg+"deg)",
    "-o-transform": "rotateY("+currdeg+"deg)",
    "transform": "rotateY("+currdeg+"deg)"
  });
}
</script>

<script type="text/javascript">
	$('.galeria').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
	});
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('a[href^="#"]').click(function() {
      var destino = $(this.hash);
      if (destino.length == 0) {
        destino = $('a[name="' + this.hash.substr(1) + '"]');
      }
      if (destino.length == 0) {
        destino = $('html');
      }
      $('html, body').animate({ scrollTop: destino.offset().top }, 500);
      return false;
    });
  });
  </script>

  <script type="text/javascript">
    $('select#versiones').on('change',function(){
      var valor = $(this).val();
      if (valor == 1) {
        $(".digitales").fadeIn("slow");
        $(".impresos").fadeOut("slow");
      } else {
        $(".digitales").fadeOut("slow");
        $(".impresos").fadeIn("slow");
      }
    });   
  </script>
@include('layouts.partials.scripts')
