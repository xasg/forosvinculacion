<!DOCTYPE doctype html>
<html>
    <head>
        <title>Servicio Social Comunitario</title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">   

<script type="text/javascript">
      $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
        
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
            <img alt="Responsive image" class="img-fluid" src="img/Logo_b.png">
                <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon">   </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto" style="color:#fff">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                INICIO
                            </a>
                        </li><!--
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                CALENDARIO
                            </a>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                MEMORIA
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                CONTACTO
                            </a>
                        </li>
                        <li class="nav-item">
                             <a href="#" target="_black"><button type="button" class="btn btn-outline-dark">REGISTRO</button></a>
                            <!--<a class="nav-link" data-toggle="modal" data-target="#myModal">
                                REGISTRO
                            </a>-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#">
                                CHAT
                            </a>
                        </li>
                        
                    </ul>
                </div>
        </nav>
        <div class="carousel slide d-none d-sm-none d-md-block" data-ride="carousel" id="carouselExampleSlidesOnly">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/auditorio.png">
                        <!--<iframe allow="autoplay; fullscreen" allowfullscreen="" class="centrado" frameborder="0" height="33%" src="https://vimeo.com/event/1229533/embed" width="37%"></iframe>-->

                <!--<iframe allow="autoplay; fullscreen" allowfullscreen="" class="centrado" frameborder="0" height="33%" src="https://player.vimeo.com/video/591731439?h=8e17e9f2d9&title=0&byline=0&portrait=0" width="37%"></iframe>-->

                <img alt="Responsive image" class="centrado img-fluid" src="img/Foros.jpeg" height="33%" width="37%">

                </div>
            </div>
        </div>

        <div class="d-block d-sm-block d-md-none">
            <img alt="Responsive image" class="centrado img-fluid" src="img/Foros.png">
        </div>

        <!--<div class="container-fluid" style="background-color:#235b4e">
            <div class="container">
            <div class="row">
                    <div class="col-md-8">
                    <br><br>     
                    <p style="color: #fff"><strong>Solicitar información e inscribir a las IES en la convocatoria del curso Servicio Social Comunitario, Herramientas y oportunidades para el desarrollo</strong><br><br> </p>
                   </div>
                   <div class="col-md-4 text-center">
                    <br><br>
                    <a href="registro.php" target="_black"><button type="button" class="btn btn-block btn-outline-dark">REGISTRO</button></a>
                    <br><br> 
                   </div>
            </div>
            </div>
        </div>-->

        


        <div class="container-fluid">
            <div class="row">
              <!--  <div class="col-md-12 text-center marg">
                        <h5>Inicia </h5>
                    </div>
                    <div class="col-md-12 text-center"><br><br>
                            <h1>
                                <span id="days"></span> días -
                                <span id="hours"></span> horas<br>
                                <span id="minutes"></span> minutos -
                                <span id="seconds"></span> segundos<br>
                            </h1>
                    </div>-->
                <div class="col-md-1">
                </div>
                <div class="col-md-5 marg">
                                        <h3 style="color: #1e352f;">Objetivo:</h3>
                                        <br>
                                            <p class="text1 text-justify">
                                               Dialogar, analizar y construir sobre los temas de vinculación: educación dual, emprendimiento asociativo y servicio social, mediante un trabajo colectivo, y desde un enfoque territorial y de intercambio de saberes. 

                                            </p>
                </div>
                <div class="col-md-5">
                    <img alt="Responsive image" class="img-fluid" src="img/Avartars.png">
                </div>
                <br>                    
            </div>
        </div>
        <div class="container">
            <div class="row">
              <div class="col-md-12 text-center marg">
                <img alt="Responsive image" class="img-fluid" src="img/Logos_Institucionales.png">
              </div>
            </div>
        </div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe src="https://vimeo.com/event/1229533/chat/" width="100%" frameborder="0"></iframe>
      </div><br><br><br>
    </div>
  </div>
</div>



        <div class="container-fluid" style="background-color:#235b4e">
            <div class="row">
                <div class="col-md-12">                   
                </div>
            </div>
        </div>


<script  type="text/javascript" src="js/bootstrap.min.js"></script>
<script  type="text/javascript" src="js/popper.min.js">
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => { 

        //===
        // VARIABLES
        //===
        const DATE_TARGET = new Date('10/08/2021 10:00 AM');
        // DOM for render
        const SPAN_DAYS = document.querySelector('span#days');
        const SPAN_HOURS = document.querySelector('span#hours');
        const SPAN_MINUTES = document.querySelector('span#minutes');
        const SPAN_SECONDS = document.querySelector('span#seconds');
        // Milliseconds for the calculations
        const MILLISECONDS_OF_A_SECOND = 1000;
        const MILLISECONDS_OF_A_MINUTE = MILLISECONDS_OF_A_SECOND * 60;
        const MILLISECONDS_OF_A_HOUR = MILLISECONDS_OF_A_MINUTE * 60;
        const MILLISECONDS_OF_A_DAY = MILLISECONDS_OF_A_HOUR * 24;

        //===
        // FUNCTIONS
        //===

        /**
        * Method that updates the countdown and the sample
        */
        function updateCountdown() {
            // Calcs
            const NOW = new Date()
            const DURATION = DATE_TARGET - NOW;
            const REMAINING_DAYS = Math.floor(DURATION / MILLISECONDS_OF_A_DAY);
            const REMAINING_HOURS = Math.floor((DURATION % MILLISECONDS_OF_A_DAY) / MILLISECONDS_OF_A_HOUR);
            const REMAINING_MINUTES = Math.floor((DURATION % MILLISECONDS_OF_A_HOUR) / MILLISECONDS_OF_A_MINUTE);
            const REMAINING_SECONDS = Math.floor((DURATION % MILLISECONDS_OF_A_MINUTE) / MILLISECONDS_OF_A_SECOND);
            // Thanks Pablo Monteserín (https://pablomonteserin.com/cuenta-regresiva/)

            // Render
            SPAN_DAYS.textContent = REMAINING_DAYS;
            SPAN_HOURS.textContent = REMAINING_HOURS;
            SPAN_MINUTES.textContent = REMAINING_MINUTES;
            SPAN_SECONDS.textContent = REMAINING_SECONDS;
        }

        //===
        // INIT
        //===
        updateCountdown();
        // Refresh every second
        setInterval(updateCountdown, MILLISECONDS_OF_A_SECOND);
    });
</script>
</body>
</html>