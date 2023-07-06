<?php 
   include_once('databases_registro.php');
   session_start();
   mysqli_set_charset( $mysqli, 'utf8');  
   $id= $_SESSION["id"];
  
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
   <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  
</head>

<body>
   <main>
      <div class="container-fluid mx-0 px-0" style="background-color: #8D203D;">
         <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg">
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
                     <li class="nav-item active">
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
                              <h4 class="mb-0">HOLA <?php echo $participante['dt_nombre']," ".$participante['dt_apaterno']." ".$participante['dt_amaterno']; ?> TU REGISTRO SE REALIZÓ CORRECTAMENTE</h4><br>   
                          
                              <h5 class="mb-0">Su numero de folio es: <strong><?php echo $participante['id_usuario'];?> </strong></h5><br>
                              <?php    
                                 $region = $participante['dt_region'];
                                 $region = 5;

                                 if ($region == 1)
                                 {
                                    echo "<h5 class='mb-0'>La sede del evento sera en TecNM de Tuxtla Gutierrez <strong> </strong></h5><br>";      
                                    echo "'<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.400951184565!2d-93.17515092795986!3d16.756715984026815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd964bb4d07fd%3A0x4e771d3242c2f25a!2sTecnol%C3%B3gico%20Nacional%20de%20M%C3%A9xico%20Campus%20Tuxtla%20Guti%C3%A9rrez!5e0!3m2!1ses-419!2smx!4v1688681077598!5m2!1ses-419!2smx' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
                                 }
                                else if ($region == 2)
                                {
                                    echo "<h5 class='mb-0'>La sede del evento sera en la BUAP Complejo Cultural <strong> </strong></h5><br>";      
                                    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15087.971620470136!2d-98.25810024458008!3d19.0200343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc742407551ef%3A0x93dc3db3e62b8694!2sComplejo%20Cultural%20Universitario%20BUAP!5e0!3m2!1ses-419!2smx!4v1688682100804!5m2!1ses-419!2smx' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
                                }
                                else if ($region == 3)
                                {
                                 echo "<h5 class='mb-0'>La sede del evento sera en la Universidad Tecnológica de Morelia <strong> </strong></h5><br>";      
                                 echo "<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30045.81552628686!2d-101.19562367514412!3d19.72424622352978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e2765411ef1%3A0x3ca21a3f9f26b9b1!2sUniversidad%20Tecnol%C3%B3gica%20de%20Morelia!5e0!3m2!1ses-419!2smx!4v1688683430036!5m2!1ses-419!2smx' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
                                }
                                else if ($region == 4)
                                {
                                 echo "<h5 class='mb-0'>La sede del evento sera en la Universidad Politecnica de San Luis Potosi <strong> </strong></h5><br>";      
                                 echo "<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7392.190818910448!2d-100.98803124284262!3d22.1223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842a9f5412c6b56f%3A0xe1b3dea4c6aa1c03!2sUniversidad%20Polit%C3%A9cnica%20de%20San%20Luis%20Potos%C3%AD!5e0!3m2!1ses-419!2smx!4v1688683677930!5m2!1ses-419!2smx' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
                                }
                                else if ($region == 5)
                                {
                                 echo "<h5 class='mb-0'>La sede del evento sera en la Universidad Tecnológica de Guaymas <strong> </strong></h5><br>";      
                                 echo "<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3526.231733698687!2d-110.89561842739703!3d27.894861176075505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86c970a075d21e87%3A0xbdbcabdc4ed64e81!2sInstituto%20Tecnol%C3%B3gico%20de%20Guaymas!5e0!3m2!1ses-419!2smx!4v1688683907911!5m2!1ses-419!2smx' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
                                }
                                else if ($region == 6)
                                {
                                 echo "<h5 class='mb-0'>La sede del evento sera en el IPN <strong> </strong></h5><br>";      
                                 //echo "'<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.400951184565!2d-93.17515092795986!3d16.756715984026815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd964bb4d07fd%3A0x4e771d3242c2f25a!2sTecnol%C3%B3gico%20Nacional%20de%20M%C3%A9xico%20Campus%20Tuxtla%20Guti%C3%A9rrez!5e0!3m2!1ses-419!2smx!4v1688681077598!5m2!1ses-419!2smx' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
                                }
                              ?>
                              
                              <img class="img-fluid" src="img/agenda.png">
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







