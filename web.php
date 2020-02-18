<div class="landing-bachillerato-virtual-web">

<nav class="navbar navbar-expand-lg navbar-initial">
  <a class="navbar-brand" href="/"><img src="/COV2/assets/img/logoKuepaBlanco.png"/></a>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="/#metodologia">Nuestra metodología</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/#somos">¿Qué es Kuepa?</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Programas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/bachillerato">Bachillerato</a>
          <a class="dropdown-item" href="/ingles">Inglés intensivo</a>
          <a class="dropdown-item" href="/bachillerato-virtual">Bachillerato virtual</a>
          <a class="dropdown-item" href="/preicfes-virtual">Preicfes virtual</a>
          <a class="dropdown-item" href="/gestion-empresarial">Gestión Empresarial</a>
          <a class="dropdown-item" href="/servicios-tic">Servicios TIC</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link last-item" href="/#contacto">Contacto</a>
      </li>
    </ul>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-sticky sticky-top">
  <a class="nav-link" href="#">Bachillerato Virtual</a>

  <div class="collapse navbar-collapse" id="navbarNav2">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="#form_bachillerato">
          <button class="navbar-btn">Quiero saber más</button>
        </a>
      </li>
    </ul>
  </div>
</nav>

<div class="banner-section">

  <div class="container">
    <div class="row row-banner align-items-end">

      <div class="col-5">
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

      <div class="col-1"></div>

      <div class="col-6">
        <div class="banner-text">
          <h1 class="banner-header">¡El bachillerato que necesitas, pero mejor!</h1>
          <p class="banner-text-content">
            El bachillerato virtual Kuepa te permite obtener tu título de bachiller académico cursando dos grados por año. 
            Te prepara tanto en habilidades académicas como laborales, necesarias para ser un excelente profesional.
          </p>
        </div>
      </div>

    </div>
  </div>


</div>

<div class="siempre-puedes-empezar-section">

  <div class="container">
    <div class="row row-text-content">
      <div class="col-5 col-text-content">
        <div class="section-text">
          <h1 class="section-header">Siempre puedes empezar</h1>
          <p class="section-text-content">
            Nuestro programa está diseñado para <span class="highlight">todas las edades y estilos de vida.</span>
          </p>

          <h4 class="header-2">¡No más clases aburridas!</h4>
          <p class="section-text-content">
            El bachillerato <span class="highlight">Kuepa</span> conecta la tecnología con contenidos educativos de primer nivel para tu crecimiento.
          </p>
        </div>
      </div>

      <div class="col-7 section-img" id="imgBackgroundAnimation">

      </div>

    </div>
  </div>
  
</div>

<div class="testimonios-section">
  <div class="container">
    <div class="row">
    <img src="/COV2/assets/img/imgFondoNaranja1.png" class="testimonio-background-img testimonio-background-img-1">
    <img src="/COV2/assets/img/imgFondoNaranja2.png" class="testimonio-background-img testimonio-background-img-2">
      <div class="col-12">
        <h1 class="section-header">Testimonios</h1>
      </div>
      <div class="col-4">
        <div class="card-testimonio">
          
          <h3 class="testimonio-name">Jimmy Gonzáles Pinto</h3>
          <div class="testimonio-img" style=" background-image: url('/COV2/assets/img/imgTestimonio1.png');"> </div>
          <div class="testimonio-text-container">
            <p class="testimonio-text">
              Para mí el estudio era una asignatura pendiente porque fui padre muy joven y el trabajo era primero, 
              pero gracias a Kuepa estoy cursando mi bachillerato. Me han ayudado mucho y pronto voy a poder <span class="highlight">cumplir mi meta de estudiar 
              español y literatura.</span>
            </p>
          </div>
  
          <button class="testimonio-video-btn" type="button" data-toggle="modal" data-target="#testimoniosModal1"><i class="fas fa-play-circle"></i> Ver video</button>

        </div>
  
      </div>
      <div class="col-4">
        <div class="card-testimonio">
          <h3 class="testimonio-name">David Reyes Sarmiento</h3>
          <div class="testimonio-img" style=" background-image: url('/COV2/assets/img/imgTestimonio2.png');"> </div>
          <div class="testimonio-text-container">
            <p class="testimonio-text">
              Kuepa me ha ayudado a mejorar mi rendimiento como deportista porque aquí tengo mis propios horarios, 
              puedo dedicarme a entrenar más, <span class="highlight">¡Me siento liberado!</span>
            </p>
          </div>
        
          <button class="testimonio-video-btn" type="button" data-toggle="modal" data-target="#testimoniosModal2"><i class="fas fa-play-circle"></i> Ver video</button>

        </div>
  
      </div>
      <div class="col-4">
        <div class="card-testimonio">
          <h3 class="testimonio-name">Ángela Villareal</h3>
          <div class="testimonio-img" style=" background-image: url('/COV2/assets/img/imgTestimonio3.png');"> </div>
          <div class="testimonio-text-container">
            <p class="testimonio-text">
              Puedo dedicarle más tiempo a materias de mi interés y que están involucradas con mi <span class="highlight">futuro profesional.</span>
            </p>
          </div>
          <button class="testimonio-video-btn" type="button" data-toggle="modal" data-target="#testimoniosModal3"><i class="fas fa-play-circle"></i> Ver video</button>

        </div>
      </div>
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

<div class="modelo-educativo-section">
  <div class="container">
    <div class="row row-modelo-educativo-section">

      <div id="animationFlag"></div>
      <div class="col-5 sticky-col sticky-top">
        <h1 class="section-header">Modelo educativo</h1>

        <div class="modelo-educativo-sub-section" id="sectionFortalecimientoText">

          <h4 class="sub-section-header">Fortalecimiento</h4>
          <p class="sub-section-description">
            De <span class="highlight">habilidades blandas</span> para que tu desempeño sobresalga en el mundo profesional y laboral.
          </p>

        </div>

        <div class="modelo-educativo-sub-section" id="sectionDesarrolloText">

          <h4 class="sub-section-header">Desarrollo</h4>
          <p class="sub-section-description">
            De <span class="highlight">habilidades del siglo XXI</span> necesarias para que interactúes con el mundo de hoy y se te facilite 
            el desempeño en futuros roles de tu vida laboral.
          </p>
          
        </div>

        <div class="modelo-educativo-sub-section" id="sectionExperienciaText">

          <h4 class="sub-section-header">Educación Basada en la experiencia</h4>
          <p class="sub-section-description">
            La mejor manera de <span class="highlight">aprender es viviendo</span> la educación a través de situaciones de la vida cotidiana.
          </p>
          
        </div>

        <div class="modelo-educativo-sub-section" id="sectionPlataformaText">

          <h4 class="sub-section-header">Plataforma</h4>
          <p class="sub-section-description">
            <span class="highlight">Contenidos dinámicos</span> en tus dispositivos favoritos, para que puedas avanzar en tu proceso de aprendizaje 
            en el lugar y a la hora que prefieras.
          </p>
          
        </div>

      </div>
      <div class="col-7 sticky-col sticky-top">
        <img class="sub-section-img" id="sectionFortalecimientoImg" src="/COV2/assets/img/imgModeloEducativoWeb1.png">
        <img class="sub-section-img" id="sectionDesarrolloImg" src="/COV2/assets/img/imgModeloEducativoWeb2.png">
        <img class="sub-section-img" id="sectionExperienciaImg" src="/COV2/assets/img/imgModeloEducativoWeb3.png">
        <img class="sub-section-img" id="sectionPlataformaImg" src="/COV2/assets/img/imgModeloEducativoWeb4.png">
      </div>
    </div>
  </div>
</div>

<div class="tutorias-section" id="tutoriasSection">
  <div class="container">
    <div class="row row-tutorias">
      <div class="tutorias-img col-5 sticky-top">

      </div>
      <div class="tutorias-content col-7">
        <div class="tutorias-content-item" id="tutoriasTexto1">
          <h1 class="section-header">Tutorías para respaldar tu aprendizaje.</h1>
          <p class="tutorias-text">
            Tienes acceso a tutorías en tiempo real que dan un <span class="highlight">componente presencial a tu aprendizaje,</span> 
            que además quedan grabadas para que consultes siempre.
          </p>
        </div>

        <div class="tutorias-content-item" id="tutoriasTexto2">
          <h1 class="section-header">El tiempo es tuyo</h1>
          <p class="tutorias-text">
            Puedes estudiar en <span class="highlight">cualquier momento,</span> sabemos que nuestros estudiantes tienen distintos 
            horarios y necesidades por lo que este programa se adapta a tu horario.
          </p>
        </div>

        <div class="tutorias-content-item" id="tutoriasTexto3">
          <h1 class="section-header">Más que matemáticas</h1>
          <p class="tutorias-text">
            Nuestro modelo te prepara también en las habilidades que necesitarás para tener una excelente comunicación, capacidad de planeación 
            y resolución de conflictos. Habilidades que el mundo laboral demanda hoy en día.
          </p>
        </div>

      </div>
    </div>
  </div>
</div>


<div class="galeria-section">
  <div class="container">
    <div class="row galeria-section-row">
      <img src="/COV2/assets/img/imgBackgroundNaranja2.png" class="galeria-background-img">
      <div class="col-6 galeria-section-col-content">
        <div class="galeria-content">
          <h1 class="section-header">Seguimiento a tu aprendizaje</h1>
          <p class="galeria-text">
            Tenemos un equipo académico que está pendiente de tu avance y en <span class="highlight">constante contacto</span> contigo para 
            asegurar los mejores resultados.
          </p>

          <h1 class="section-header">Desde cualquier lugar</h1>
          <p class="galeria-text">
            Tenemos una plataforma educativa con todo el contenido necesario para tu estudio, a la que puedes acceder 
            <span class="highlight">desde cualquier lugar.</span>
          </p>
        </div>
      </div>
      <div class="col-6 galeria-imgs">
        <div class="row">
          <div class="col-6 gallery-col-1" style="background-image: url('COV2/assets/img/imgSeguimientoWeb1.png');">
          </div>
          <div class="col-6 gallery-col-2">
            <div class="row">
              <div class="col-12 gallery-col-2-img gallery-col-2-img-1" style="padding-bottom: 10px; background-image: url('COV2/assets/img/imgSeguimientoWeb2.png');">
              </div>
              <div class="col-12 gallery-col-2-img gallery-col-2-img-2" style="background-image: url('COV2/assets/img/imgSeguimientoWeb3.png');">
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  </div>
</div>


<div class="territorio-section"> 
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1 class="section-header">En todo el territorio</h1>
        <p class="territorio-text">
          Nuestro modelo hoy llega a más de <span class="highlight">60 ciudades y municipios en Colombia,</span> gracias a nuestra 
          combinación de tecnología y calidad educativa.
        </p>

        <img class="animation-img" id="animationImg" src="/COV2/assets/img/imgPersonasTerritorioWeb.png">
        <img src="/COV2/assets/img/imgMapaTerritorioWeb.png">
        <div id="animationImgFlag"></div>
        
      </div>
      <div class="col-6 col-resultados-saber">
        <h1 class="section-header">Resultados Pruebas Saber</h1>
        <img class="territorio-section-img" src="/COV2/assets/img/imgResultadosPruebasSaberWeb.png">
        <p class="anio-resultados">
          2019
        </p>
        <div class="resultados-kuepa" id="animationBar">
          <div class="container-img-resultados">
            <img src="/COV2/assets/img/imgPersonaPruebasSaberWeb.png">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="equipo-section">

  <div class="equipo-content-container">
    <div class="equipo-content">
      <h1 class="section-header">Equipo</h1>
      <p class="equipo-text">
        Contamos con un equipo experto en construcción de modelos educativos basados en 
        <span class="highlight">innovación, calidad en los contenidos y herramientas tecnológicas</span> para el seguimiento estudiantil.
      </p>
    </div>
  </div>

  <div class = "imgAnimationContainer" id="imgAnimationContainer1">
    <img id="imgAnimation1" class="equipo-img" src="/COV2/assets/img/imgEquipoWeb.png">
  </div>

</div>

<div class="presencia-regional-section" id="preseciaRegionalSection">

  <h1 class="section-header">Presencia regional</h1>

  <div class="container">
    <div class="row">
      <div class="col-4">
        <img class="presencia-regional-img" src="/COV2/assets/img/imgPersonasWeb.png">
        <p class="presencia-regional-value count-animation" id="peopleNumber">0</p>
        <p class="presencia-regional-text">
          Personas han estudiado
        </p>
        <p class="presencia-regional-text">
          nuestros programas
        </p>
      </div>
      <div class="col-4">
        <img class="presencia-regional-img" src="/COV2/assets/img/imgHorasWeb.png">
        <p class="presencia-regional-value count-animation" id="totalHours">0</p>
        <p class="presencia-regional-text">
          horas totales de estudio en
        </p>
        <p class="presencia-regional-text">
          la plataforma Kuepa, lo que
        </p>
        <p class="presencia-regional-text">
          equivale a 259 años
        </p>
      </div>
      <div class="col-4">
        <img class="presencia-regional-img" src="/COV2/assets/img/imgLugaresWeb.png">
        <p class="presencia-regional-value count-animation" id="totalCountries">0</p>
        <p class="presencia-regional-text">
          países en los que estamos
        </p>
      </div>
      <div class="col-12">
        <p class="resolucion-text"> 
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
  function isElementScrolledIntoView(element, viewHeightOffset, pixelsOffset = 0) {
    const elementTop = offset(element).top;
    const windowOffset = window.innerHeight * viewHeightOffset;

    return elementTop - window.scrollY - windowOffset - pixelsOffset <= 0;
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
    verifyCounter(totalcountriesCounter, 150, 1);
  }

</script>

<script>

  const barElement = document.getElementById('animationBar');
  const barAnimationDelay = 5;
  const barAnimationStep = 1;
  const initHeight = 100;
  const barHeightValue = 385;
  let isAnimationStarted = false;
  let isFinished = false;

  function startBarCounter(start, value, delay, step) {
    let localStart = start;
    isFinished = false;

    setInterval(function() {

      if(localStart === value) isFinished = true;

      if(localStart < value)
      {
        localStart += step;
        barElement.style.height = localStart + 'px';
      }
    }, delay);

  }

  function checkAnimationBar() {

    if(!isElementScrolledIntoView(barElement, 1)) {
      if(isFinished) {
        barElement.style.height = initHeight + 'px';
        isAnimationStarted = false;
      }
    }

    if (isElementScrolledIntoView(barElement, 0.9)) {
      if(!isAnimationStarted) {
        startBarCounter(initHeight, barHeightValue, barAnimationDelay, barAnimationStep);
        isAnimationStarted = true;
      }
    }
    
  }

</script>

<script>
  const imgAnimationElement = document.getElementById('animationImg');
  const imgAnimationFlagElement = document.getElementById('animationImgFlag');

  const initImgTopPosition = window.innerHeight * -0.75;
  const endImgTopPosition = 180;

  const imgAnimationDelay = 1;
  const imgAnimationStep = 3;
  let isImgAnimationStarted = false;
  let isImgAnimationFinished = false;

  imgAnimationElement.style.opacity = 0;
  imgAnimationElement.style.top = initImgTopPosition + 'px';

  function startImgAnimation(start, value, delay, step) {
    let localStart = start;
    isImgAnimationFinished = false;

    setInterval(function() {

      if(localStart === value) isImgAnimationFinished = true;

      if(localStart < value)
      {
        localStart += step;
        imgAnimationElement.style.top = localStart + 'px';
      }
    }, delay);

  }

  function checkAnimationImg() {

    if(!isElementScrolledIntoView(imgAnimationElement, 1)) {
      if(isImgAnimationFinished) {
        imgAnimationElement.style.top = initImgTopPosition + 'px';
        isImgAnimationStarted = false;
        imgAnimationElement.style.opacity = 0;
      }
    }

    if (isElementScrolledIntoView(imgAnimationFlagElement, 1)) {
      if(!isImgAnimationStarted) {
        startImgAnimation(initImgTopPosition, endImgTopPosition, imgAnimationDelay, imgAnimationStep);
        isImgAnimationStarted = true;
        imgAnimationElement.style.opacity = 1;
      }
    }

  }

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

    else {
      section1.style.opacity = 1;
      section1Img.style.opacity = 1;
    }
  }

</script>

<script>
  let box = document.getElementById('imgAnimationContainer1');
  let boxContent = document.getElementById('imgAnimation1');
  let nextSection = document.getElementById('preseciaRegionalSection');

  let widthInicial = 80;
  let escalaInicial = 2;
  let dist = window.innerHeight * 0.6;
  let endAnimationOffset = 65;

  function initBox(box, boxContent) {
    box.style.width = widthInicial + '%';
    boxContent.style.transform = 'scale(' + escalaInicial + ')';
  }

  function handleScrollImgAnimation(box, boxContent) {
    let vScroll = window.scrollY;
    let base = offset(box).top - endAnimationOffset - dist;
    let y = vScroll - base;

    if (vScroll >= base) {
      let nWidth = widthInicial + (y * (100 - widthInicial) / dist);
      let scale = escalaInicial - (y / dist * (escalaInicial - 1));

      if (nWidth <= 100) {
        box.style.width = nWidth + '%';
        boxContent.style.transform = 'scale(' + scale + ')';
      }
    }

    if(isElementScrolledIntoView(nextSection, 1)) {
      box.style.width = '100%';
      boxContent.style.transform = 'scale(1)';
    }

    if(!isElementScrolledIntoView(box, 1)) {
      box.style.width = widthInicial + '%';
      boxContent.style.transform = 'scale(' + escalaInicial + ')';
    }
  }
  
  function handleImgAnimations() {
    handleScrollImgAnimation(box, boxContent);
  }

  initBox(box, boxContent);
</script>

<script>

  const textElement = document.getElementById('tutoriasTexto1');
  const textElementHeight = textElement.offsetHeight;
  const textElement2 = document.getElementById('tutoriasTexto2');
  const textElementHeight2 = textElement2.offsetHeight;
  const textElement3 = document.getElementById('tutoriasTexto3');
  const textElementHeight3 = textElement3.offsetHeight;

  const offsetScroll = 130;

  function checkTextFlag(textElement, textElementHeight, offsetScroll) {
    if(isElementScrolledIntoView(textElement, 0, offsetScroll)) {

      const scroll = window.scrollY + offsetScroll; 
      const innerScroll = scroll - offset(textElement).top;

      const perc = innerScroll / textElementHeight;
      let newOpac = 1 - perc;
      if(newOpac > 1) newOpac = 1;
      else if(newOpac < 0) newOpac = 0;

      textElement.style.opacity = newOpac;

    } else {
      textElement.style.opacity = 1;
    }
  }

  function checkTextFlags() {
    checkTextFlag(textElement, textElementHeight, offsetScroll);
    checkTextFlag(textElement2, textElementHeight2, offsetScroll);
    checkTextFlag(textElement3, textElementHeight3, offsetScroll);
  }

</script>

<script>

  const backgroundElement = document.getElementById('imgBackgroundAnimation');
  const backgroundElementHeight = backgroundElement.offsetHeight;

  const initBackgroundPosition = 650;
  const endBackgroundPosition = 0;
  const deltaBackgroundPosition = initBackgroundPosition - endBackgroundPosition;

  backgroundElement.style.backgroundPositionX = initBackgroundPosition + 'px';

  function checkBackgroundAnimationFlag() {
    if(isElementScrolledIntoView(backgroundElement, 1)) {
      const scroll = window.scrollY; 
      const innerScroll = scroll - offset(backgroundElement).top + window.innerHeight;
      const perc = innerScroll / backgroundElementHeight;

      let newPosition = initBackgroundPosition - (perc * deltaBackgroundPosition);

      if(newPosition > initBackgroundPosition) newPosition = initBackgroundPosition;
      else if(newPosition < endBackgroundPosition) newPosition = endBackgroundPosition;

      backgroundElement.style.backgroundPositionX = newPosition + 'px';

    } else {
      backgroundElement.style.backgroundPositionX = initBackgroundPosition + 'px';
    }
  }

</script>

<script>

  function handleScroll() {
    verifyCounters();
    checkAnimationImg();
    checkFlag();
    handleImgAnimations();
    checkAnimationBar();
    checkTextFlags();
    checkBackgroundAnimationFlag();
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