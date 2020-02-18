<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="/COV2/assets/img/logo.png" style="width: 115px;"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border: none;">
    <span class="navbar-toggler-icon" 
    style="color: #F4590F; 
    background-image: none; 
    display: flex; 
    align-items: 
    center; 
    width: fit-content;
    font-size: 1.5rem;">
      <i class="fas fa-bars"></i>
    </span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Bachillerato Virtual<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ingles">Inglés Intensivo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/preicfes-virtual">Preicfes virtual</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/gestion-empresarial">Gestión Empresarial</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/servicios-tic">Servicios TIC</a>
      </li>
    </ul>
  </div>
</nav>

<div class="landing-bachillerato-virtual-mobile">

  <div class="fixed-bar fixed-bottom">
    <div class="container">
      <div class="row align-items-center row-buttons">
        <div class="col-6">
          <a href="#form_bachillerato">
            <button class="form-into-view-btn">Cuéntame más</button>
          </a>
        </div>
        <div class="col-6">
          <button class="chat-btn" onclick="wtpbtn()">Chatea ahora</button>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="section-header banner-header">¡El bachillerato que necesitas, <strong>pero mejor</strong>!</h1>
      </div>
    </div>
  </div>

  <div class="container banner-section">
    <div class="row align-items-center">
      <div class="col-7">
        <p class="banner-description">
          El bachillerato virtual Kuepa te permite obtener tu título de bachiller académico cursando dos grados por año. 
          Te prepara tanto en habilidades académicas como laborales, necesarias para ser un excelente profesional.
        </p>
      </div>
    </div>
  </div>

  <div class="container form-section">
    <div class="row">
      <div class="col-12">
        <div class="landing-form" id="landingForm">
          <h3 class="form-title section-header">¿Quieres saber más?</h3>
          <form method="post" role="form" action="<?php echo url_for("common/contactDo") ?>" id="form_bachillerato">
            <input name="contact_distancia[last_name]" type="hidden" placeholder="Apellido"  value=" "  />
            <input name="contact_distancia[college]" type="hidden" value="80" style="margin-left: 10px;"/>
            <input name="contact_distancia[id_career]" type="hidden" value="13" style="margin-left: 10px;"/>
            <input name="contact_distancia[adnetwork_alternative]" type="hidden" value="Google,<?php echo (isset($_GET['adnetwork']) && $_GET['adnetwork'] != '') ? $_GET['adnetwork'] : 'organico' ?>" style="margin-left: 10px;"/>
            <input type="hidden" name="contact_distancia[city]" id="city" value="otro">
            <input type="hidden" name="contact_distancia[administrable_id]" id="administrable_id" value="false">
            <input type="hidden" name="contact_distancia[redirect_payu]" id="redirect_payu" value="false">
            <input type="hidden" name="contact_distancia[is_virtual]" id="is_virtual" value="false">
            <?php echo $form->renderHiddenFields(true); ?>
            <div class="form-group">
              <label for="name">Nombre</label>
              <input class="form-control" name="contact_distancia[name]" type="text" required  />
            </div>
            <div class="form-group">
              <label for="phone">Teléfono</label>
              <input class="form-control movil"  name="contact_distancia[phone]" type="tel" required/>
            </div>
            <div class="form-group">
              <label for="email">Correo Electrónico</label>
              <input class="form-control" name="contact_distancia[mail]" type="email" required />
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="cbTesrminosCondiciones" required>
              <label class="form-check-label label-cbTesrminosCondiciones" for="cbTesrminosCondiciones">Acepto términos y condiciones</label>
            </div>
            <button id="sendata" type="submit" class="btn-submit-form">Enviar <span id="icon-loading" style="display: none"><i class="fa fa-spinner fa-pulse"></i></span></button>
          </form>
          <div id="response_user"></div>

        </div>
      </div>
    </div>
  </div>

  <div class="siempre-puedes-empezar-section">

    <div id="spaceInbetweenAnimationSection" class="container-space-inbetween-animation">
      <div id="spaceInbetweenAnimationContainer" class="animation-container sticky-top">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="section-header">Puedes comenzar cuando quieras</h1>
              <p class="section-description">
                Nuestro programa está diseñado para <span class="highlight highlight-green">todas las edades y estilos de vida.</span>
              </p>
            </div>
          </div>
        </div>
        <div id="spaceInbetweenAnimationLeft" class="container-img container-img-left" style="background-image: url('/COV2/assets/img/imgBrazo.png');">

        </div>
        <div id="spaceInbetweenAnimationRight" class="container-img container-img-right" style="background-image: url('/COV2/assets/img/imgComputadorAnimacion1.png');">

        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-description-2">
            <p style="margin: 0; "> <span class="highlight highlight-orange">¡No más clases aburridas!</span></p>
            <p>
              El bachillerato <span class="highlight highlight-orange">Kuepa</span> conecta la tecnología con contenidos educativos de primer nivel para tu crecimiento.
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="testimonios-section">

    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="section-header">Testimonios</h1>
        </div>
      </div>
    </div>

    <div class="owl-carousel">
    
      <div class="card-testimonio">
          
        <h3 class="testimonio-name">Jimmy Gonzáles Pinto</h3>
        <div class="testimonio-img" style=" background-image: url('/COV2/assets/img/imgTestimonio1.png');"> </div>
        <p class="testimonio-text">
          Para mí el estudio era una asignatura pendiente porque fui padre muy joven y el trabajo era primero, 
          pero gracias a Kuepa estoy cursando mi bachillerato. Me han ayudado mucho y pronto voy a poder cumplir mi meta de estudiar 
          español y literatura.
        </p>

        <button class="testimonio-video-btn" type="button" data-toggle="modal" data-target="#testimoniosModal1"><i class="fas fa-play-circle"></i> Ver video</button>

      </div>

      <div class="card-testimonio">
        <h3 class="testimonio-name">David Reyes Sarmiento</h3>
        <div class="testimonio-img" style=" background-image: url('/COV2/assets/img/imgTestimonio2.png');"> </div>
        <p class="testimonio-text">
          Kuepa me ha ayudado a mejorar mi rendimiento como deportista porque aquí tengo mis propios horarios, 
          puedo dedicarme a entrenar más, ¡Me siento liberado!
        </p>
      
        <button class="testimonio-video-btn" type="button" data-toggle="modal" data-target="#testimoniosModal2"><i class="fas fa-play-circle"></i> Ver video</button>

      </div>

      <div class="card-testimonio">
        <h3 class="testimonio-name">Ángela Villareal</h3>
        <div class="testimonio-img" style=" background-image: url('/COV2/assets/img/imgTestimonio3.png');"> </div>
        <p class="testimonio-text">
          Puedo dedicarle más tiempo a materias de mi interés y que están involucradas con mi futuro profesional.
        </p>

        <button class="testimonio-video-btn" type="button" data-toggle="modal" data-target="#testimoniosModal3"><i class="fas fa-play-circle"></i> Ver video</button>

      </div>

    </div>

    <div class="modal fade testimonio-video-modal" id="testimoniosModal1" tabindex="-1" role="dialog" aria-labelledby="testimoniosModal1Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="testimonio-video">
              <iframe src="https://player.vimeo.com/video/378806644?color=ff671b&title=0&byline=0&portrait=0" width="300" height="550" frameborder="0"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade testimonio-video-modal" id="testimoniosModal2" tabindex="-1" role="dialog" aria-labelledby="testimoniosModal2Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="testimonio-video">
              <iframe src="https://player.vimeo.com/video/378800565?color=ff671b&title=0&byline=0&portrait=0" width="300" height="550" frameborder="0" ></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade testimonio-video-modal" id="testimoniosModal3" tabindex="-1" role="dialog" aria-labelledby="testimoniosModal3Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="testimonio-video">
              <iframe src="https://player.vimeo.com/video/378807282?color=ff671b&title=0&byline=0&portrait=0" width="300" height="550" frameborder="0" ></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div id="modeloEducativoSection" class="container modelo-educativo-section">
    <div class="row row-modelo-educativo-section" >
      <div class="col-12">
        
        <div id="animationFlag"></div>
        <div class="sticky-top animation-container">
          <div class="row animation-row">
            <div class="" id="sectionFortalecimiento">
              <div class="modelo-educativo-sub-section fortalecimiento">
                <h1 class="section-header">Modelo educativo</h1>
                <div class="modelo-educativo-sub-section-content" id="sectionFortalecimientoText">
                  <h3 class="sub-section-header section-header-orange">Fortalecimiento</h3>
                  <p class="sub-section-description">
                    De <span class="highlight">habilidades blandas</span> para que tu desempeño sobresalga en el mundo profesional y laboral.
                  </p>
                </div>
                <img class="sub-section-img" id="sectionFortalecimientoImg" src="/COV2/assets/img/imgFadeAnimation1.png">
              </div>
            </div>
          </div>

          <div class="row animation-row">
            <div class="" id="sectionDesarrollo">
              <div class="modelo-educativo-sub-section desarrollo">
                <h1 class="section-header">Modelo educativo</h1>
                <div class="modelo-educativo-sub-section-content" id="sectionDesarrolloText">
                  <h3 class="sub-section-header section-header-green">Desarrollo</h3>
                  <p class="sub-section-description">
                    De <span class="highlight">habilidades del siglo XXI</span> necesarias para que interactúes con el mundo de hoy y se te facilite 
                    el desempeño en futuros roles de tu vida laboral.
                  </p>
                </div>
                <img class="sub-section-img" id="sectionDesarrolloImg" src="/COV2/assets/img/imgFadeAnimation2.png">
              </div>
            </div>
          </div>

          <div class="row animation-row">
            <div class="" id="sectionExperiencia">
              <div class="modelo-educativo-sub-section educacion-experiencia">
                <h1 class="section-header">Modelo educativo</h1>
                <div class="modelo-educativo-sub-section-content" id="sectionExperienciaText">
                  <h3 class="sub-section-header section-header-orange">Educación Basada en la Experiencia</h3>
                  <p class="sub-section-description">
                    La mejor manera de <span class="highlight">aprender es viviendo</span> la educación a través de situaciones de la vida cotidiana.
                  </p>
                </div>
                <img class="sub-section-img" id="sectionExperienciaImg" src="/COV2/assets/img/imgFadeAnimation3.png">
              </div>
            </div>
          </div>

          <div class="row animation-row">
            <div class="" id="sectionPlataforma">
              <div class="modelo-educativo-sub-section plataforma">
                <h1 class="section-header">Modelo educativo</h1>
                <div class="modelo-educativo-sub-section-content" id="sectionPlataformaText">
                  <h3 class="sub-section-header section-header-green">Plataforma</h3>
                  <p class="sub-section-description">
                    <span class="highlight">Contenidos dinámicos</span> en tus dispositivos favoritos, para que puedas avanzar en tu proceso de aprendizaje 
                    en el lugar y a la hora que prefieras.
                  </p>
                </div>
                <img class="sub-section-img" id="sectionPlataformaImg" src="/COV2/assets/img/imgFadeAnimation4.png">
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>


  <div class="tutorias-section" id="tutoriasSection">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="section-header">Tutorías para respaldar tu aprendizaje.</h1>
          <p class="tutorias-description">
            Tienes acceso a tutorías en tiempo real que dan un <span class="highlight highlightBd">componente presencial a tu aprendizaje,</span> que, además, quedan grabadas para que las puedas consultar siempre.
          </p>
          
        </div>
      </div>
    </div>

    <div class = "imgAnimationContainer" id="imgAnimationContainer1">
      <img id="imgAnimation1" class="tutorias-img" src="/COV2/assets/img/imgTutorias.png">
    </div>

  </div>

  <div id="clockAnimationFlag" class="clock-animation-container">
    <div id="clockImg" class="sticky-top clock-animation-img-container">
      <div class="clock-animation-content">
        <div id="clockAnimationTitle" class="clock-animation-title">
          <h1 class="section-header">El tiempo</h1>
          <h1 class="section-header">es tuyo</h1>
        </div>
        <div id="clockAnimationText" class="clock-animation-text-container">
          <h1 class="section-header">El tiempo es tuyo</h1>
          <p class="clock-animation-text">
            Puedes estudiar en <span class="highlight highlightBd">cualquier momento.</span> Sabemos que nuestros estudiantes tienen distintos horarios y necesidades por lo que este programa se adapta a tu horario.
          </p>
        </div>
      </div>
    </div>

  </div>

  <div id="masQueMatematicasSection" class="mas-que-matematicas-section full-view-height-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <h1 class="section-header">Más que matemáticas</h1>
          <p>
            Nuestro modelo te prepara también en las habilidades que necesitarás para tener una excelente comunicación, capacidad de planeación y resolución de conflictos. Habilidades que el mundo laboral demanda hoy en día.
          </p>
        </div>
      </div>
    </div>

    <img src="/COV2/assets/img/imgMasQueMatematicas.png" class="mas-que-matematicas-img">
  </div>

  <div class="desde-cualquier-lugar-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="section-header">Desde cualquier lugar</h1>
          <p>
            Tenemos una plataforma educativa con todo el contenido necesario para tu estudio, a la que puedes acceder <span class="highlight highlightBd">desde cualquier lugar.</span>
          </p>
        </div>
      </div>
    </div>

    <div class = "imgAnimationContainer" id="imgAnimationContainer2">
      <img id="imgAnimation2" src="COV2/assets/img/imgDesdeCualquierLugar.png" class="desde-cualquier-lugar-img">
    </div>

  </div>

  <div class="seguimiento-section full-view-height-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="section-header">Seguimiento a tu aprendizaje</h1>
          <p>
            Tenemos un equipo académico que está pendiente de tu avance y en <span class="highlight highlightBd">constante contacto</span> contigo para asegurar los mejores resultados.
          </p>
        </div>


        <div class="col-6 col-gallery-1">
          <img src="COV2/assets/img/imgSeguimiento1.png" class="seguimiento-gallery-img">
        </div>
        <div class="col-6 col-gallery-2">
          <div class="row">
            <div class="col-12 col-gallery-img-2">
              <img src="COV2/assets/img/imgSeguimiento2.png" class="seguimiento-gallery-img">
            </div>
            <div class="col-12">
              <img src="COV2/assets/img/imgSeguimiento3.png" class="seguimiento-gallery-img">
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="territorio-section">
    <div class="container">
      <div class="row">
        <div class="col-6 col-territorio-text">
          <h1 class="section-header" style="text-align: left;">En todo el territorio</h1>
          <p class="territorios-text">
            Nuestro modelo hoy llega a más de <span class="highlight highlightBd">60 ciudades y municipios en Colombia,</span> gracias a nuestra combinación de tecnología y calidad educativa.
          </p>
        </div>
        <div class="col-6 col-territorio-img">
          <img src="COV2/assets/img/imgTerritorio.png" class="territorio-img">
        </div>

      </div>
    </div>
  </div>

  <div class="resultados-saber-pro-section full-view-height-section">
    <div class="container">
      <div class="row align-items-center row-center-elements">
        <div class="col-12">
          <h1 class="section-header">Resultados Pruebas Saber</h1>
          <img src="COV2/assets/img/imgResultadosPruebasSaber.png" class="resultados-img">
        </div>

      </div>
    </div>
  </div>

  <div class="equipo-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="section-header">Equipo</h1>
          <p>
            Contamos con un equipo experto en construcción de modelos educativos basados en <span class="highlight highlightBd">innovación, calidad en los contenidos y herramientas tecnológicas</span> para el seguimiento estudiantil.
          </p>
        </div>

      </div>
    </div>

    <div class = "imgAnimationContainer" id="imgAnimationContainer3">
      <img id="imgAnimation3" src="COV2/assets/img/imgEquipo.png" class="equipo-img">
    </div>

  </div>

  <div class="presencia-regional-section">
    <div class="container">
      <div class="row">

        <div class="col-12 col-sub-section col-total-hours" style="padding: 0;">
          <div class="presencia-regional-sub-section total-hours">

            <h1 class="section-header">Presencia regional</h1>

            <img src="COV2/assets/img/usersIconLanding.png" class="presencia-regional-sub-section-img">

            <p class="presencia-regional-sub-section-number count-animation" id="peopleNumber">0</p>
            <p class="presencia-regional-sub-section-text">
              Personas han estudiado
            </p>
            <p class="presencia-regional-sub-section-text">
              nuestros programas
            </p>

            <div class="presencia-regional-separador"></div>

            <img src="COV2/assets/img/clockIconLanding.png" class="presencia-regional-sub-section-img">

            <p class="presencia-regional-sub-section-number count-animation" id="totalHours">0</p>
            <p class="presencia-regional-sub-section-text">
              horas totales de estudio en 
            </p>
            <p class="presencia-regional-sub-section-text">
              la plataforma Kuepa, lo que 
            </p>
            <p class="presencia-regional-sub-section-text">
              equivale a 259 años
            </p>
          </div>
        </div>

        <div class="col-12 col-sub-section">
          <div class="presencia-regional-sub-section total-contries">
            <img src="COV2/assets/img/imgPresenciaRegionalMapa.png" class="presencia-regional-sub-section-img">

            <p class="presencia-regional-sub-section-number count-animation" id="totalCountries">0</p>
            <p class="presencia-regional-sub-section-text">
              países en los que estamos
            </p>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <div class="comunidad-section">
    <!-- <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="section-header">Nuestra comunidad</h1>
        </div>
      </div>
    </div>

    <div class="owl-carousel comunidad-gallery">
      <img src="COV2/assets/img/imgComunidad1.png" class="comunidad-gallerry-img">
      <img src="COV2/assets/img/imgComunidad1.png" class="comunidad-gallerry-img">
      <img src="COV2/assets/img/imgComunidad1.png" class="comunidad-gallerry-img">
    </div> -->

    <div class="container">
      <div class="row">
        <div class="col-12">
          <p> 
            <span class="highlight highlight-orange">Kuepa</span> es un colegio con más de 10 años de experiencia 
            avalado por la Secretaría de educación del Distrito mediante resolución 02-053 del 24 de octubre de 2018, de la 
            secretaría de educación de Bogotá.
          </p>
        </div>
      </div>
    </div>

  </div>

</div>



<script>
  function formatNumber(amount, decimalCount = 0, decimal = ",", thousands = ".") {
    try {
      decimalCount = Math.abs(decimalCount);
      decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

      const negativeSign = amount < 0 ? "-" : "";

      let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
      let j = (i.length > 3) ? i.length % 3 : 0;

      return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
    } catch (e) {
      console.log(e)
    }
  };
</script>

<script>
  function offset(el) {
    let rect = el.getBoundingClientRect(),
    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
  }
</script>

<script>
  function isElementScrolledIntoView(element, viewHeightOffset) {
    const elementTop = offset(element).top;
    const windowOffset = window.innerHeight * viewHeightOffset;

    return elementTop - window.scrollY - windowOffset <= 0;
  }
</script>

<script>
  function startCounter(start, value, countElement, delay, step) {
    let localStart = start;

    setInterval(function() {

      if(localStart < value)
      {
        while (localStart + step > value) step = step / 10;
      
        localStart += step;
        countElement.innerHTML = formatNumber(localStart);
      }
    }, delay);
  }

  const peopleNumberCounter =  { element: document.getElementById('peopleNumber'), isStarted: false, value: 161000}
  const totalHoursCounter = { element: document.getElementById('totalHours'), isStarted: false, value: 2267781}
  const totalcountriesCounter = { element: document.getElementById('totalCountries'), isStarted: false, value: 18}

  function verifyCounter(counter, delay, step) {

    const counterElement = counter.element;

    if(!isElementScrolledIntoView(counterElement, 1)) {
      if(counter.isStarted) {
        counterElement.innerHTML = 0;
        counter.isStarted = false; 
      }
    }

    if (isElementScrolledIntoView(counterElement, 0.75)) {
      if(!counter.isStarted) {
        startCounter(0, counter.value, counterElement, delay, step);
        counter.isStarted = true;
      }
    }
    
  }

  function verifyCounters() {
    verifyCounter(peopleNumberCounter, 20, 1000);
    verifyCounter(totalHoursCounter, 100, 1000000);
    verifyCounter(totalcountriesCounter, 40, 1);
  }

</script>

<script>
  let box = document.getElementById('imgAnimationContainer1');
  let boxContent = document.getElementById('imgAnimation1');

  let box2 = document.getElementById('imgAnimationContainer2');
  let boxContent2 = document.getElementById('imgAnimation2');

  let box3 = document.getElementById('imgAnimationContainer3');
  let boxContent3 = document.getElementById('imgAnimation3');

  let widthInicial = 80;
  let escalaInicial = 2;
  let dist = window.innerHeight * 0.6;

  function initBox(box, boxContent) {
    box.style.width = widthInicial + "%";
    boxContent.style.transform = "scale(" + escalaInicial + ")";
  }

  function handleScrollImgAnimation(box, boxContent) {
    let vScroll = window.scrollY;
    let base = offset(box).top - dist;
    let y = vScroll - base;

    if (vScroll >= base) {
      let nWidth = widthInicial + (y * (100 - widthInicial) / dist);
      let scale = escalaInicial - (y / dist * (escalaInicial - 1));

      if (nWidth <= 100) {
        box.style.width = nWidth + "%";
        boxContent.style.transform = "scale(" + scale + ")";

      }
    }
  }
  
  function handleImgAnimations() {
    handleScrollImgAnimation(box, boxContent);
    handleScrollImgAnimation(box2, boxContent2);
    handleScrollImgAnimation(box3, boxContent3);
  }

  initBox(box, boxContent);
  initBox(box2, boxContent2);
  initBox(box3, boxContent3);
</script>

<script>
  const flag = document.getElementById('animationFlag');
  const endFlag = document.getElementById('tutoriasSection');

  const actualSize = offset(endFlag).top - offset(flag).top - window.innerHeight;
  const numSections = 7;
  const sectionLength = actualSize / numSections;

  const section1 = document.getElementById('sectionFortalecimientoText');
  const section2 = document.getElementById('sectionDesarrolloText');
  const section3 = document.getElementById('sectionExperienciaText');
  const section4 = document.getElementById('sectionPlataformaText');

  const section1Img = document.getElementById('sectionFortalecimientoImg');
  const section2Img = document.getElementById('sectionDesarrolloImg');
  const section3Img = document.getElementById('sectionExperienciaImg');
  const section4Img = document.getElementById('sectionPlataformaImg');

  section2.style.opacity = 0;
  section3.style.opacity = 0;
  section4.style.opacity = 0;

  section2Img.style.opacity = 0;
  section3Img.style.opacity = 0;
  section4Img.style.opacity = 0;

  function fadeInElement(element, percent) {
    element.style.opacity = percent;
  }

  function fadeOutElement(element, percent) {
    element.style.opacity = 1 - percent;
  }

  function fadeInElement2(element, percent) {
    const opac = percent * 2;
    element.style.opacity = opac >= 1 ? 1 : opac;
  }

  function fadeOutElement2(element, percent) {
    const opac = 1 - (percent * 2);
    element.style.opacity = opac <= 0 ? 0 : opac;
  }
  

  function clearOutElement(elements) {

    elements.forEach(element => element.style.opacity = 0);
    
  }


  function checkFlag() {

    if(isElementScrolledIntoView(flag, 0) ) {
      let scroll = window.scrollY;
      let innerScroll = scroll - offset(flag).top;
      let currentSection = Math.floor(innerScroll / sectionLength);
      let innerSectionScroll = innerScroll - (sectionLength * currentSection);
      let percScrolled = innerSectionScroll / sectionLength;

      if(currentSection === 0) {
        clearOutElement([section2, section3, section4, section2Img, section3Img, section4Img]);

      } else if (currentSection === 1) {
        fadeOutElement2(section1, percScrolled);
        fadeInElement2(section2, percScrolled);

        fadeOutElement(section1Img, percScrolled);
        fadeInElement(section2Img, percScrolled);

        clearOutElement([section3, section4, section3Img, section4Img]);

      } else if (currentSection === 2) { 

        clearOutElement([section1, section3, section4, section1Img, section3Img, section4Img]);

      } else if (currentSection === 3) {
        fadeOutElement2(section2, percScrolled);
        fadeInElement2(section3, percScrolled);

        fadeOutElement(section2Img, percScrolled);
        fadeInElement(section3Img, percScrolled);

        clearOutElement([section1, section4, section1Img, section4Img]);

      } else if (currentSection === 4) { 
        clearOutElement([section1, section2, section4, section1Img, section2Img, section4Img]);

      } else if (currentSection === 5) {
        fadeOutElement2(section3, percScrolled);
        fadeInElement2(section4, percScrolled);

        fadeOutElement(section3Img, percScrolled);
        fadeInElement(section4Img, percScrolled);

        clearOutElement([section1, section2, section1Img, section2Img]);

      } else {
        clearOutElement([section1, section2, section3, section1Img, section2Img, section3Img]);
      }
    }
  }

</script>

<script>

  const flag2 = document.getElementById('clockAnimationFlag');
  const clock = document.getElementById('clockImg');
  const nextSection = document.getElementById('masQueMatematicasSection');
  const text1 = document.getElementById('clockAnimationText');
  const title = document.getElementById('clockAnimationTitle');
  const clockContainerSize = flag2.clientHeight - window.outerHeight;

  const percStartText = 0.5;
  const percEndTitle = 0.4;

  const finalSize = 330;
  const percOffset = 0.7;  
  const initSize = 2000 / percOffset;
  clock.style.backgroundSize = (finalSize + (percOffset * (initSize - finalSize)) ) + 'px';


  function checkClockFlag() {

    // if(isElementScrolledIntoView(nextSection, 1)) {
    //   clock.style.backgroundSize = finalSize + 'px';
    //   text1.style.opacity = 1;
    // }

    if(isElementScrolledIntoView(flag2, 0)) {
      let scrolled = window.scrollY - offset(flag2).top;
      let percScrolled = scrolled / clockContainerSize;
      let value = finalSize + ((percOffset - percScrolled) * (initSize - finalSize));

      if(percScrolled <= percEndTitle) {
        title.style.opacity = 1 - (percScrolled / percEndTitle);
      }

      else {
        title.style.opacity = 0;
      }

      if(percScrolled >= percOffset) {
        text1.style.opacity = 1;
      } 
      else if(percScrolled >= percStartText) {
        let diff = percScrolled - percStartText;
        let opac = diff / (percOffset - percStartText);

        text1.style.opacity = opac;
      } else if (text1.style.opacity !== 0) {
        text1.style.opacity = 0;
      }

      if(value >= finalSize) clock.style.backgroundSize = value + 'px';
      else clock.style.backgroundSize = finalSize + 'px';
    }
    
  }

</script>

<script>
  const flag3 = document.getElementById('spaceInbetweenAnimationContainer');
  const flag3Container = document.getElementById('spaceInbetweenAnimationSection');

  const leftImg = document.getElementById('spaceInbetweenAnimationLeft');
  const rightImg = document.getElementById('spaceInbetweenAnimationRight');

  const contHeight = flag3Container.clientHeight - flag3.clientHeight;

  const leftImgInitPosition = -200;
  const rightImgInitPosition = 215;

  const leftImgEndPosition = 0;
  const rightImgEndPosition = 100;

  const deltaLeft = leftImgInitPosition - leftImgEndPosition;
  const deltaRight = rightImgInitPosition - rightImgEndPosition;

  leftImg.style.backgroundPositionX = leftImgInitPosition + 'px';
  rightImg.style.backgroundPositionX = rightImgInitPosition + 'px';

  function checkSpaceInbetweenAnimationFlag() {
    if(isElementScrolledIntoView(flag3, 0)) {
      let scrolled = window.scrollY - offset(flag3Container).top;
      let percScrolled = scrolled / contHeight;

      let valueRight = rightImgInitPosition - (percScrolled * deltaRight);
      let valueLeft = leftImgInitPosition - (percScrolled * deltaLeft);

      if(valueRight >= rightImgEndPosition) rightImg.style.backgroundPositionX = valueRight + 'px';

      if(valueLeft <= leftImgEndPosition) leftImg.style.backgroundPositionX = valueLeft + 'px';

    }
  }

  
</script>

<script>

  function testScroll() {
    const test = document.getElementById('presenciaRegionalPeopleNumber');
    console.log('IntoView: ' + isElementScrolledIntoView(test, 0) );
  }

  function handleScroll() {
    
    verifyCounters();
    handleImgAnimations();
    checkFlag();
    checkClockFlag();
    checkSpaceInbetweenAnimationFlag();
  }

  window.addEventListener('scroll', function(e) {
    handleScroll();
  });
</script>

<script type="text/javascript">
    var form_register_id = "#form_bachillerato";
    $(function(){
        $( form_register_id ).submit(function( event ) {
            event.preventDefault();
            $('#icon-loading').show();
            var send_data = true;
            if($("input[name='contact_distancia[name]']",form_register_id).val() == ""){
                send_data = false;
            }
            if($("input[name='contact_distancia[last_name]']",form_register_id).val() == ""){
                send_data = false;
            }
            if($("input[name='contact_distancia[mail]']",form_register_id).val() == ""){
                send_data = false;
            }
            if($("input[name='contact_distancia[phone]']",form_register_id).val() == ""){
                send_data = false;
            }
            if($("select[name='contact_distancia[college]']",form_register_id).val() == ""){
                send_data = false;
            }
            if($("select[name='contact_distancia[id_career]']",form_register_id).val() == ""){
                send_data = false;
            }
            if($("select[name='contact_distancia[adnetwork_alternative]']",form_register_id).val() == ""){
                send_data = false;
            }
            phone_validator = $("input[name='contact_distancia[phone]']",form_register_id).val();
            if(phone_validator[0] == "5" && phone_validator[1] == "7" && phone_validator[2] == ' '){
                if(phone_validator.length < 16){
                    alert("El número de teléfono debe tener 10 dígitos");
                    $("input[name='contact_distancia[phone]']",form_register_id).val('');
                    $('#icon-loading').hide();
                    return false;
                }
            }
            if(send_data){
                var url = "<?php echo url_for("common/contactDo") ?>"; // El script a dónde se realizará la petición.
                $.ajax({
                    type: "POST",
                    url: url,
                    data: $(form_register_id).serialize(), // Adjuntar los campos del formulario enviado.
                    success: function(data)
                    {   
                        $('#icon-loading').hide();
                        $(form_register_id).hide();
                        $("#response_user").html(data); // Mostrar la respuestas del script PHP.
                        $("#response_user").show();
                    }
                });
            }else{
                alert("Debe completar todos los datos del formulario");
                $('#icon-loading').hide();
            }
        });

    });
</script>
