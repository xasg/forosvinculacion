<?php 
   include_once('databases_registro.php');
   session_start();
   mysqli_set_charset( $mysqli, 'utf8');  
   $id=$_SESSION["id"];
   $participante = run_participante($id);
   ?>
<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="" />
   <meta name="keywords" content="" />
   <link rel="icon" href="assets/images/favicon.png" sizes="35x35" type="image/png">
   <title>Registro</title>
   <link rel="stylesheet" href="assets/css/all.min.css">
   <link rel="stylesheet" href="assets/css/flaticon.css">
   <link rel="stylesheet" href="assets/css/animate.min.css">
   <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
   <link rel="stylesheet" href="assets/css/jquery.bootstrap-touchspin.min.css">
   <link rel="stylesheet" href="assets/css/slick.css">
   <link rel="stylesheet" href="assets/css/responsive.css">
   <link rel="stylesheet" href="assets/css/color.css">
   <link rel="stylesheet" href="assets/css/bootstrap-multiselect.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/style_navs.css">
   <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  
</head>

<body>
   <main>
      <div class="container-fluid mx-0 px-0" style="background-color: #8D203D;">
         <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg navigation">
               <img alt="Responsive image" class="img-fluid" src="img/logo.png" width="150">
               <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                  <span class="navbar-toggler-icon"> </span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mx-auto" style="width:0px;">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.html">
                           INICIO
                        </a>
                     </li>
                     <li class="nav-item active activo">
                        <a class="nav-link" href="#">
                           REGISTRO
                        </a>
                     </li>
                    
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <div class="w-100 pt-121  opc1 position-relative">
         <img class="img-fluid" src="img/cintillo_header.png" width="100%" style="margin-top: 2%;">
      </div>




        <div class="col-sm-8 col-md-8 offset-md-2 text-center"><br><br>

            <h4 class="mb-0">HOLA <?php echo $participante['dt_nombre']," ".$participante['dt_apaterno']." ".$participante['dt_amaterno']; ?> YA CUENTAS CON UN REGISTRO</h4><br>   
            <!-- Se eliminmo el folio y se agrego la sede del evento - (Alexis) -->
            <h4><strong>La sede del evento sera en <?php echo $participante['dt_cede'] ?></strong></h4>
            <img class="img-fluid" src="img/agenda.png">
        </div>
        <div class="col-sm-12 col-md-12"><br><br>                            
         <!-- Se agrego el frame de la conmsulta a la base de datos de la sede - (Alexis) -->
            <iframe src='<?php echo $participante['dt_ubicacion']; ?>' width='100%' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>
        </div>
        <br><br>



      <!-- Imagen greco de cabecera -->
      <div class="w-100 pt-121  opc1 position-relative">
         <img class="img-fluid" src="img/cintillo_footer.png" width="100%">
      </div>
      <footer style="background-color: #8D203D;" id="contacto">
         <div class="w-100 pt-121  opc1 position-relative">
            <div class="container position-relative">
               <div class="footer-wrap w-100 text-center">
                  <div class="footer-inner d-inline-block">
                     <div class="logo d-inline-block">
                        <h1 class="mb-0">
                           <a href="index.html" title=""><br>
                              <img class="img-fluid" src="img/logo.png" alt="Logo" width="30%">
                           </a>
                        </h1>
                     </div>
                     <p class="mb-0" style="color: #fff">Contacto:</p>
                     <p class="mb-0" style="color: #fff">forosdevinculacion@fese.mx</p><br><br><br>
                  </div>
                  <!-- <div class="footer-bottom d-flex flex-wrap justify-content-between w-100">                              
                            </div> -->
               </div>
            </div>
         </div>
      </footer><!-- Footer -->
   </main>
   <!-- Main Wrapper -->
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/wow.min.js"></script>
   <script src="assets/js/counterup.min.js"></script>
   <script src="assets/js/jquery.downCount.js"></script>
   <script src="assets/js/jquery.fancybox.min.js"></script>
   <script src="assets/js/jquery.bootstrap-touchspin.min.js"></script>
   <script src="assets/js/perfect-scrollbar.min.js"></script>
   <script src="assets/js/slick.min.js"></script>
   <script src="assets/js/isotope.min.js"></script>
   <script src="assets/js/custom-scripts.js"></script>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script src="assets/js/bootstrap-multiselect.js"></script>
  </body>
</html>







