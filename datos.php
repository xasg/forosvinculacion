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
   $mesa = $participante['dt_mesa1'];
   $folio = $participante['id_usuario'];
   

   ?>
<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="" />
   <meta name="keywords" content="" />
   <!-- <link rel="icon" href="assets/images/favicon.png" sizes="35x35" type="image/png"> -->
   <link rel="icon" href="img/icon.png" sizes="35x35" type="image/png">
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

   <style>
      
      body {
            font-family: 'Montserrat', sans-serif;
        }
        .verde{
    background:#245c4f !important;
    color: #fff !important; 
    font-size: 20px !important;
    border-bottom: 2px solid #fff !important;
}

.cafe-claro{
    background:#efe6d5 !important; 
    color: #000 !important; 
    font-size: 20px;
}
.cafe-claro-size{
    background:#efe6d5 !important; 
    color: #000 !important; 
    text-align: left !important;
}
.text-left{
    text-align: left !important;
    width:70%;
}

.cafe{
    background:#bfa27a; 
    color: #fff;
}
.nav.nav-tabs .nav-item a.nav-link {
    color: #8D203D ;
}
.nav.nav-tabs .nav-item a.nav-link:hover {
    color: #fff ;
    background:#8D203D !important;
}

   </style>
   
</head>

<body>
   <main>
      <div class="container-fluid mx-0 px-0" style="background: linear-gradient(to top ,#10312B,#235b4e);">
         <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg navigation">
               <a href="index.html">
                  <img alt="Responsive image" class="img-fluid" src="img/logo_2024.png" width="150">
               </a>
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
                        <a class="nav-link" href="registro.php">
                           REGISTRO
                        </a>
                     </li>
                     <!-- <li class="nav-item active">
                            <a class="nav-link" href="./agenda.php">
                                AGENDA
                            </a>
                        </li>                     -->
                  </ul>
               </div>
            </nav>
         </div>
      </div>

        <div class="col-sm-8 col-md-8 offset-md-2 text-center"><br><br>
                              <h4 class="mb-0">Hola <?php echo $participante['dt_nombre']." ".$participante['dt_apaterno']." ".$participante['dt_amaterno']; ?> tu registro se realizó correctamente</h4><br>  
                               <h4 class="mb-0">Tu folio de registro es: <strong><?php echo  $folio;  ?></strong></h4><br>  
                          
                              <!--<h4 class="mb-0">Su numero de folio es: <strong></*?php echo $participante['id_usuario'];*/?> </strong></h4><br>-->

      <h4><strong>El anfitrión es: <?php echo $participante['dt_cede'] ?></strong></h4>                            
      <h4><strong>el día: <?php echo $participante['dt_fecha'] ?></strong></h4>                            

      </div>

      <?php if ($region != 06) { ?>
       <div class="col-sm-8 col-md-8 offset-md-2 text-center">
           <!-- <img class="img-fluid" src="img/agenda.png"> -->
            <!-- Se agrega validacion en caso de requerirse por si es para el día 1 o 2 -->

            <table class="table   table-borderless border align-middle text-center">
                   <thead class="table-light">      
                      <div class="card">
 
                            <div class="card-body cafe text-center" >
                                <h4 class="card-title" >DÍA 1</h4>
                               <h5 class="card-subtitle "> <b> MESAS DE TRABAJO SIMULTÁNEAS </b></h5>
       
                            </div>
 
                      </div>
 
                      <tr class="text-justifyu" >
 
                         <th class="verde">HORARIO</th>
 
                         <th class="cafe-claro">ACTIVIDAD</th>
 
                      </tr>
 
                   </thead>
 
                      <tbody class="table-group-divider">
 
                         <tr class="" >
 
                            <td class="verde">15:30 - 16:00</td>
 
                            <td class="text-left ">Registro de asistencia de los invitados</td>
 
                            
 
                         </tr>
                         
                         <tr class="">
                            
                            <td class="verde">16:00 – 16:30</td>
                      
                            <td class="text-left cafe-claro-size ">Bienvenida y apertura de los trabajos</td>
 
                         </tr>

                         <tr class="">
                            
                            <td class="verde">16:30 – 18:30</td>
                      
                            <td class="text-left ">Mesas de trabajo simultáneas con la participación de industria,  gobierno y academia por sectores económicos específicos de la región</td>
 
                         </tr>

                         <tr class="">
                            
                            <td class="verde">18:30</td>
                      
                            <td class="text-left cafe-claro-size ">Actividad de integración de redes colaborativas (catering)</td>
 
                         </tr>
 
                      </tbody>
                </table>


            <table class="table   table-borderless border align-middle text-center">

             <thead class="table-light">

               <caption></caption>

               <div class="card">

               <div class="card-body cafe text-center" >

                  <h4 class="card-title" >DÍA 2</h4>

                  <h5 class="card-subtitle"> <b>TRABAJO COLEGIADO EN PLENARIA</b></h5>

               </div>

               </div>

               <tr class="text-justifyu">

                  <th class="verde">HORARIO</th>

                  <th class="cafe-claro">ACTIVIDAD</th>

               </tr>

               </thead>

               <tbody class="table-group-divider">

                  <tr class="" >

                     <td class="verde">09:00 – 10:00</td>

                     <td class="text-left">Registro de asistencia de los invitados</td>

                     

                  </tr>

                  <tr class="">

                     <td class="verde">10:00 - 11:10</td>

                     <td class="text-left cafe-claro-size">Inauguración oficial del Foro de Vinculación (Transmisión en vivo por canales oficiales)</td>

                  </tr>

                  <!-- <tr class="">

                     <td class="verde">11:00 - 11:10</td>

                     <td class="text-left">Presentación de las Memorias de Buenas Prácticas de Vinculación</td>

                  </tr> -->

                  <tr class="">

                     <td class="verde">11:10 – 11:20</td>

                     <td class="text-left ">Fotografía oficial</td>

                  </tr>

                  <tr class="">

                     <td class="verde">11:20 – 11:25</td>

                     <td class="text-left cafe-claro-size">Resultados de los trabajos del día 1</td>

                  </tr>

                  <tr class="">

                     <td class="verde">11:25 – 12:00</td>

                     <td class="text-left ">Avances y retos por parte de las autoridades educativas estatales de la región</td>

                  </tr>
                  <tr class="">

                     <td class="verde">12:00 – 15:00</td>

                     <td class="text-left cafe-claro-size">Diálogo de alto nivel:
                        Intercambio entre sectores privado, público y social, en torno a los temas prioritarios de vinculación a nivel regional y estatal.</td>

                  </tr>
                  <tr class="">

                     <td class="verde">15:00 – 15:30</td>

                     <td class="text-left ">Conclusiones y cierre</td>

                  </tr>

               </tbody>

               <tfoot>

               

               </tfoot>

            </table>
               <!-- <table class="table   table-borderless border align-middle">

                  <thead class="table-light">

                     <caption></caption>

                     <div class="card">

                     <div class="card-body cafe" >

                        <h4 class="card-title">DÍA 1</h4>
                        
                     </div>

                     </div>

                     <tr class="text-center" >

                        <th class="verde">HORARIO</th>

                        <th class="cafe-claro"><b>MESA EN LA QUE TE REGISTRASTE</b></th>

                     </tr>

                     </thead>

                     <tbody class="table-group-divider">
                        <tr class="" >
                           <td class="verde">14:00 - 15:30</td>
                           <td class="text-left "><?php echo  $mesa; ?></td> 
                        </tr>  
                     </tbody>
                     <tfoot>   
                     </tfoot>
               </table> -->


               <!-- <table class="table   table-borderless border align-middle">

                  <thead class="table-light">

                     <caption></caption>

                     <div class="card">

                     <div class="card-body cafe" >

                        <h4 class="card-title">DÍA 2</h4>
                        
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

               </table> -->


           <br><br><br>
           <!-- <h4>
              Marco General para la Educación Dual del Tipo Superior 
            </h4>
            <p><a href="https://bit.ly/44nIaw3" target="_blank" style="background: #C6C6C6; border-radius: 10px; padding: 1px;"> Descargar </a></p>
            <br><br>
           <h4>
           Marco General Emprendimiento Asociativo 
            </h4>
            <p><a href="https://bit.ly/3rvkcQV" target="_blank" style="background: #C6C6C6; border-radius: 10px; padding: 1px;"> Descargar </a></p> -->
      </div>
      <?php         # code...
      } else{
         ?>
         <div class="col-sm-8 col-md-8 offset-md-2 text-center">
                     <table class="table   table-borderless border align-middle text-center">
                     <thead class="table-light">

                     <caption></caption>

                     <div class="card">

                     <div class="card-body cafe text-center" >

                        <h4 class="card-title" >AGENDA</h4>

                        <h5 class="card-subtitle"> <b>TRABAJO COLEGIADO EN PLENARIA</b></h5>

                     </div>

                     </div>

                     <tr class="text-justifyu">

                        <th class="verde">HORARIO</th>

                        <th class="cafe-claro">ACTIVIDAD</th>

                     </tr>

                     </thead>

                     <tbody class="table-group-divider">

                        <tr class="" >

                           <td class="verde">09:00 – 10:00</td>

                           <td class="text-left">Registro de asistencia de los invitados</td>

                           

                        </tr>

                        <tr class="">

                           <td class="verde">10:00 - 11:10</td>

                           <td class="text-left cafe-claro-size">Inauguración oficial del Foro de Vinculación (Transmisión en vivo por canales oficiales)</td>

                        </tr>

                        <!-- <tr class="">

                           <td class="verde">11:00 - 11:10</td>

                           <td class="text-left">Presentación de las Memorias de Buenas Prácticas de Vinculación</td>

                        </tr> -->

                        <tr class="">

                           <td class="verde">11:10 – 11:20</td>

                           <td class="text-left ">Fotografía oficial</td>

                        </tr>

                        <tr class="">

                           <td class="verde">11:20 – 11:25</td>

                           <td class="text-left cafe-claro-size">Resultados de los trabajos del día 1</td>

                        </tr>

                        <tr class="">

                           <td class="verde">11:25 – 12:00</td>

                           <td class="text-left ">Avances y retos por parte de las autoridades educativas estatales de la región</td>

                        </tr>
                        <tr class="">

                           <td class="verde">12:00 – 15:00</td>

                           <td class="text-left cafe-claro-size">Diálogo de alto nivel:
                              Intercambio entre sectores privado, público y social, en torno a los temas prioritarios de vinculación a nivel regional y estatal.</td>

                        </tr>
                        <tr class="">

                           <td class="verde">15:00 – 15:30</td>

                           <td class="text-left ">Conclusiones y cierre</td>

                        </tr>

                     </tbody>

                     <tfoot>

                     

                     </tfoot>

                     </table>
      </div>
      <?php
      }
      ?>
      <div class="col-sm-12 col-md-12"><br><br>
         <?php     
            
            switch ($region) 
            {
               case 01:
                  $cede = "TecNM - Campus Mérida";
                  $direccion  = "Av. Tecnológico S/N 97118 Mérida, Yucatán" ;
               break;
                 
               case 02: 
                  $cede = "Hotel Emporio Acapulco";
                  $direccion  = "Av. Costera Miguel Alemas # 121, Acapulco, Guerrero" ;
               break;
               case 03: 
                  $cede = "Universidad Tecnológica de Nayarit";
                  $direccion  = " Carretera México 200, Km 9 63786, Col, 24 de Febrero, Xalisco, Nay." ;
               break;
               case 04: 
                  $cede = "Palacio De Convenciones De Zacatecas";
                  $direccion  = "Blvd. Héroes de Chapultepec S/N Ciudad Gobierno, 98160 Zacatecas, Zac." ;
               break;
               case 05: 
                  $cede = "ICC La Paz";
                  $direccion  = "México 11 516, 23060 La Paz, B.C.S." ;
               break;
               case 06: 
                  $cede = "Palacio de Minería";
                  $direccion  = "C. de Tacuba 5, Centro Histórico de la Cdad. de México, Centro, Cuauhtémoc, 06000 Ciudad de México, CDMX" ;
               break;
               
                  default:
                  break;
            }

         ?>
         <h3 class="card-subtitle text-center"><strong> La sede será en <?php  echo $cede  ?> en la siguiente dirección: <?php echo $direccion  ?>   <strong></h3>
         <br>
         <iframe src = <?php echo $participante['dt_ubicacion'] ?> width='100%' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>
      </div>
      <br><br>

      <footer style="background: linear-gradient(to top ,#10312B,#235b4e);" id="contacto">
         <div class="w-100 pt-121  opc1 position-relative">
            <div class="container position-relative">
               <div class="footer-wrap w-100 text-center">
                  <div class="footer-inner d-inline-block">
                     <div class="logo d-inline-block">
                        <h1 class="mb-0">
                           <a href="index.html" title=""><br>
                              <img class="img-fluid" src="img/logo_2024.png" alt="Logo" width="40%">
                           </a>
                        </h1>
                     </div>
                     <p class="mb-0" style="color: #fff">Contacto: forosdevinculacion@fese.mx</p><br><br><br>
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







