<?php 
   session_start(); 
   include_once('databases_usuario.php');      
   mysqli_set_charset( $mysqli, 'utf8');
   $id=$_SESSION["id"];  
   $registros = run_registros_tall();
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
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <link rel="stylesheet" href="assets/css/all.min.css">
      <link rel="stylesheet" href="assets/css/flaticon.css">
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
      <link rel="stylesheet" href="assets/css/jquery.bootstrap-touchspin.min.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/responsive.css">
      <link rel="stylesheet" href="assets/css/color.css">
      <link rel="stylesheet" href="assets/css/bootstrap-multiselect.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/jquery.dataTables.css">
   </head>
   <body>
      <main>
         <header class="stick style1 w-100" style=" background-color: #860f01;">
            <div class="container">
               <div class="logo-menu-wrap w-100 d-flex flex-wrap justify-content-between align-items-start">
                  <div class="logo">
                     <h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="assets/images/img/logoforos.png" alt="Logo" srcset="assets/images/img/logoforos.png"></a></h1>
                  </div>
                  <!-- Logo -->
                  <nav class="d-inline-flex align-items-center">
                     <div class="header-left">
                        <ul class="mb-0 list-unstyled d-inline-flex">
                           <li class="menu-item-has-children"><a href="index.html" title="">Inicio</a></li>
                           <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Foros</a></li>
                           <li><a href="javascript:void(0);" title="">Calendario</a></li>
                           <li><a href="registro.php" title="">Registro</a></li>
                           <li><a href="javascript:void(0);" title="">Contacto</a></li>
                        </ul>
                     </div>
                     <div class="header-right-btns">
                        <!--<a class="search-btn" href="javascript:void(0);" title="">
                           <i class="flaticon-magnifying-glass"></i></a>-->
                        <a class="user-btn" href="javascript:void(0);" title=""><i class="flaticon-user"></i></a>
                        <!-- <a class="menu-btn" href="javascript:void(0);" title=""><i class="flaticon-menu"></i></a>-->
                     </div>
                  </nav>
               </div>
               <!-- Logo Menu Wrap -->
            </div>
         </header>
         <!-- Header -->
         <div class="menu-wrap">
            <span class="menu-close"><i class="fas fa-times"></i></span>
            <ul class="mb-0 list-unstyled w-100">
               <li class="menu-item-has-children"><a href="index.html" title="">Inicio</a></li>
               <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Foros</a></li>
               <li><a href="javascript:void(0);" title="">Calendario</a></li>
               <li><a href="registro.php" title="">Registro</a></li>
               <li><a href="javascript:void(0);" title="">Contacto</a></li>
            </ul>
         </div>
         <!-- Menu Wrap -->
         <section>
            <div class="w-100 text-center black-layer position-relative">                   
            </div><br><br><br>
         </section>

         <section>
               <div class="container-fluid">
                     <div class="row ">
                        <br><br><br></div><br><br><br>
                      <div class="col-md-12">
                                  <ul class="nav nav-tabs">
                                       <li class="nav-item">
                                        <a class="nav-link" href="report_resumen.php">Resumen</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link active" href="report.php">Registros</a>
                                      </li>
                                       <li class="nav-item">
                                        <a class="nav-link " href="asistencia.php">Asistencia general</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="expositor.php">Expositor</a>
                                      </li>
                                  </ul><br><br>
                      </div>

  <table id="example" class="table table-responsive table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Región</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Organización</th>
                <th>Participación</th>
            </tr>
        </thead>
        <tbody >
                                           <?php
                                             $counter = 1;

                                              while($reg = $registros->fetch_assoc())
                                              {
                                              ?>                                              
                                              <tr style="border-bottom:0px">  
                                                 <td><?php echo $reg['dt_nombre_region']; ?></td>                 
                                                <td><?php echo $reg['dt_nombre']." ".$reg['dt_apaterno']." ".$reg['dt_amaterno']; ?></td>
                                                <td><?php echo $reg['dt_email']; ?></td>
                                                 <td>
                                                   <?php if($reg['dt_nom_org']==NULL) 
                                                            { 
                                                          echo $reg['dt_nom_org2']; 
                                                            } else { 
                                                             echo $reg['dt_nom_org']; 
                                                        } ?>   
                                                 </td>
                                                 <td><?php echo $reg['dt_participacion']; ?></td>
                                              </tr> 

                                              <?php
                                                }

                                              ?>  
           

            
        </tbody>
    </table>
                             
                     </div>
                  </div>
         </section>
      </main>
      <!-- Main Wrapper -->
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
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="assets/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript">
       $(document).ready(function() {
    $('#example').DataTable();
} );
      </script>

   </body>
</html>

