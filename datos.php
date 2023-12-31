<?php   
// Se agrega validacion de registro para poder acceder a ventana de existe
   session_start();
   include_once('databases_registro.php'); 
   if($_SESSION['id'] == false){
    header("Location:index.html");
   }
// -----------------------------------
   mysqli_set_charset( $mysqli, 'utf8');  
   $id= $_SESSION["id"];  
   $participante = run_participante($id);
   $region = $participante['dt_region'];
   $cede = $participante['dt_cede'];

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
   <link rel="stylesheet" href="css/agenda.css">
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
                     <li class="nav-item active">
                            <a class="nav-link" href="./agenda.php">
                                AGENDA
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
                              <h4 class="mb-0">Hola <?php echo $participante['dt_nombre']." ".$participante['dt_apaterno']." ".$participante['dt_amaterno']; ?> tu registro se realizó correctamente</h4><br>   
                          
                              <!--<h4 class="mb-0">Su numero de folio es: <strong></*?php echo $participante['id_usuario'];*/?> </strong></h4><br>-->

      <h4><strong>El anfitrión será: <?php echo $participante['dt_cede'] ?></strong></h4>                            
      <h4><strong>el día: <?php echo $participante['dt_fecha'] ?></strong></h4>                            

      </div>
       <div class="col-sm-8 col-md-8 offset-md-2 text-center">
           <!-- <img class="img-fluid" src="img/agenda.png"> -->
            <!-- Se agrega validacion en caso de requerirse por si es para el día 1 o 2 -->
            <?php
            if ($region == '06') {
            ?>

               <table class="table   table-borderless border align-middle">

                  <thead class="table-light">

                     <caption></caption>

                     <div class="card">

                     <div class="card-body cafe" >

                        <h4 class="card-title">DÍA 1</h4>

                        <h5 class="card-subtitle ">REUNIÓN DE RESPONSABLES DE VINCULACIÓN Y ACTIVIDAD CULTURAL</h5>

                     </div>

                     </div>

                     <tr class="text-justifyu" >

                        <th class="verde">HORARIO</th>

                        <th class="cafe-claro"><b>ACTIVIDAD</b></th>

                     </tr>

                     </thead>

                     <tbody class="table-group-divider">

                        <tr class="" >

                           <td class="verde">14:00 - 15:30</td>

                           <td class="text-left ">Plan de Buenas Practicas</td>

                           

                        </tr>
                        
                        <tr class="">
                           
                           <td class="verde">16:00 - 18:00</td>
                     
                           <td class="text-left ">Reunión de responsables de vinculación de las IES</td>

                           

                        </tr>
                        <tr class="">
                           
                           <td class="verde">18:00 - 19:00</td>
                     
                           <td class="text-left ">Actividad Integradora y cultural </td>

                           

                        </tr>

                     </tbody>

                     <tfoot>

                     

                     </tfoot>

               </table>
            <?php
            }else{
            ?>
               <table class="table   table-borderless border align-middle">

                  <thead class="table-light">

                     <caption></caption>

                     <div class="card">

                     <div class="card-body cafe" >

                        <h4 class="card-title">DÍA 1</h4>

                        <h5 class="card-subtitle ">REUNIÓN VINCULADORES</h5>

                     </div>

                     </div>

                     <tr class="text-justifyu" >

                        <th class="verde">HORARIO</th>

                        <th class="cafe-claro"><b>ACTIVIDAD</b></th>

                     </tr>

                     </thead>

                     <tbody class="table-group-divider">

                        <tr class="" >

                           <td class="verde">16:00 - 18:00</td>

                           <td class="text-left ">Reunión de responsables de vinculación de las IES</td>

                           

                        </tr>
                        
                        <tr class="">
                           
                           <td class="verde">18:00</td>
                     
                           <td class="text-left ">Actividad Integradora y cultural</td>

                           

                        </tr>

                     </tbody>

                     <tfoot>

                     

                     </tfoot>

               </table>

            <?php
            }
            ?>

            <?php 
            if ($region == '06') {
            ?>
               <table class="table table-borderless border align-middle">

                  <thead class="table-light">

                     <caption></caption>

                     <div class="card">

                     <div class="card-body cafe" >

                        <h4 class="card-title" >DÍA 2</h4>

                        <h5 class="card-subtitle">MESA DE EXPERTOS DE ALTO NIVEL(TITULARES DE IES)</h5>

                     </div>

                     </div>

                     <tr class="text-justifyu">

                        <th class="verde">HORARIO</th>

                        <th class="cafe-claro">ACTIVIDAD</th>

                     </tr>

                     </thead>

                     <tbody class="table-group-divider">

                        <tr class="" >

                           <td class="verde">10:00 - 10:50</td>

                           <td class="text-left">Bienvenida y mensajes de autoridades</td>

                           

                        </tr>

                        <tr class="">

                           <td class="verde">10:50 - 11:00</td>

                           <td class="text-left cafe-claro-size">Fotografía oficial</td>

                        </tr>

                        <tr class="">

                           <td class="verde">11:00 - 12:20</td>

                           <td class="text-left">Emprendimiento asociativo (ESS)</td>

                        </tr>

                        <tr class="">

                           <td class="verde">12:20 - 14:00</td>

                           <td class="text-left cafe-claro-size">Educación Dual</td>

                        </tr>

                        <tr class="">

                           <td class="verde">14:00 - 14:30</td>

                           <td class="text-left">Servicio Social</td>

                        </tr>

                        <tr class="">

                           <td class="verde">14:30 - 15:30</td>

                           <td class="text-left cafe-claro-size">CLAUSURA GENERAL</td>

                        </tr>

                     </tbody>

                     <tfoot>

                     

                     </tfoot>

               </table>
               <?php
            }else{
            ?>
               <table class="table table-borderless border align-middle">

                  <thead class="table-light">

                     <caption></caption>

                     <div class="card">

                     <div class="card-body cafe" >

                        <h4 class="card-title" >DÍA 2</h4>

                        <h5 class="card-subtitle">MESA DE EXPERTOS DE ALTO NIVEL(TITULARES DE IES)</h5>

                     </div>

                     </div>

                     <tr class="text-justifyu">

                        <th class="verde">HORARIO</th>

                        <th class="cafe-claro">ACTIVIDAD</th>

                     </tr>

                     </thead>

                     <tbody class="table-group-divider">

                        <tr class="" >

                           <td class="verde">10:00 - 11:15</td>

                           <td class="text-left">Bienvenida y mensajes de autoridades</td>

                           

                        </tr>

                        <tr class="">

                           <td class="verde">11:15 - 11:30</td>

                           <td class="text-left cafe-claro-size">Fotografía oficial</td>

                        </tr>

                        <tr class="">

                           <td class="verde">11:30 - 13:00</td>

                           <td class="text-left">Emprendimiento asociativo (ESS)</td>

                        </tr>

                        <tr class="">

                           <td class="verde">13:00 - 15:00</td>

                           <td class="text-left cafe-claro-size">Educación Dual</td>

                        </tr>

                        <tr class="">

                           <td class="verde">15:00 - 16:00</td>

                           <td class="text-left">Servicio Social</td>

                        </tr>

                        <!-- <tr class="">

                           <td class="verde">17:00 - 19:00</td>

                           <td class="text-left cafe-claro-size">Buenas prácticas de educación dual, economia social y servicio social comunitario</td>

                        </tr> -->

                     </tbody>

                     <tfoot>

                     

                     </tfoot>

               </table>
            <?php
            }
            ?>
           <br><br><br>
           <h4>
              Marco General para la Educación Dual del Tipo Superior 
            </h4>
            <p><a href="https://bit.ly/44nIaw3" target="_blank" style="background: #C6C6C6; border-radius: 10px; padding: 1px;"> Descargar </a></p>
            <br><br>
           <h4>
           Marco General Emprendimiento Asociativo 
            </h4>
            <p><a href="https://bit.ly/3rvkcQV" target="_blank" style="background: #C6C6C6; border-radius: 10px; padding: 1px;"> Descargar </a></p>
      </div>

      <div class="col-sm-12 col-md-12"><br><br>
         <iframe src = <?php echo $participante['dt_ubicacion'] ?> width='100%' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>
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







