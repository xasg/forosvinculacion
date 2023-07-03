<?php   
   include_once('../databases_usuario.php');   
   mysqli_set_charset( $mysqli, 'utf8');
   $dualreg = run_dual_bajio();
   $emprenreg = emp_bajio();


   ?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <link rel="icon" href="assets/images/favicon.png" sizes="35x35" type="image/png">
      <title>Registro Asistente general</title>
      <link rel="stylesheet" href="../assets/css/bootstrap.css">
      <link rel="stylesheet" href="../assets/css/all.min.css">
      <link rel="stylesheet" href="../assets/css/flaticon.css">
      <link rel="stylesheet" href="../assets/css/animate.min.css">
      <link rel="stylesheet" href="../assets/css/jquery.fancybox.min.css">
      <link rel="stylesheet" href="../assets/css/jquery.bootstrap-touchspin.min.css">
      <link rel="stylesheet" href="../assets/css/slick.css">
      <link rel="stylesheet" href="../assets/css/responsive.css">
      <link rel="stylesheet" href="../assets/css/color.css">
      <link rel="stylesheet" href="../assets/css/bootstrap-multiselect.css">
      <link rel="stylesheet" href="../assets/css/style.css">
      <link rel="stylesheet" href="../assets/css/jquery.dataTables.css">
   </head>
   <body>
      <main>
         <header class="stick style1 w-100" style=" background-color: #860f01;">
            <div class="container">
               <div class="logo-menu-wrap w-100 d-flex flex-wrap justify-content-between align-items-start">
                  <div class="logo">
                     <h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="assets/images/img/logoforos.png" alt="Logo" srcset="../assets/images/img/logoforos.png"></a></h1>
                  </div>
                  <!-- Logo -->
                  <nav class="d-inline-flex align-items-center">
                     <div class="header-left">
                        <ul class="mb-0 list-unstyled d-inline-flex">
                           <li class="menu-item-has-children"><a href="../index.html" title="">Salir</a></li>
                        </ul>
                     </div>
                     <div class="header-right-btns">
                        <!--<a class="search-btn" href="javascript:void(0);" title="">
                           <i class="flaticon-magnifying-glass"></i></a>-->
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
               <li class="menu-item-has-children"><a href="../index.html" title="">Salir</a></li>
            </ul>
         </div>
         <!-- Menu Wrap -->
         <section>
            <div class="w-100 text-center black-layer position-relative">                   
            </div><br><br><br>
         </section>

         <section>
               <div class="container">
                     <div class="row ">  

                       <br><br><br></div><br><br><br>
                      <div class="col-md-12">
                                 <ul class="nav nav-tabs">
                                      <li class="nav-item">
                                        <a class="nav-link" href="../mesas.php">REGISTROS</a> 
                                        </li>
                                       <li class="nav-item">
                                        <a class="nav-link" href="sur_sureste.php">SUR SURESTE</a> 
                                        </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="cdmx.php">CDMX Y ZONA METROPOLITANA</a>
                                      </li>
                                       <li class="nav-item">
                                        <a class="nav-link active" href="bajio.php">BAJIO OCCIDENTE</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="frontera.php">FRONTERA NORTE</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="noroeste.php">NOROESTE</a>
                                      </li>
                                  </ul><br><br>
                      </div>


<div class="row "> 
 <div class="col-md-12">
  <h3>MESAS DE TRABAJO BAJIO OCCIDENTE</h3><br><br>
 </div>
<div class="col-md-6">
<h4>Día 1. Educación Dual</h4>
<table class="table table-bordered">    
    <thead>
      <tr>
                <th>Mesa</th>
                <th class="text-center"># Asistente general</th>
            </tr>
    </thead>
    <tbody>
     <?php
                                             $counter = 1;

                                              while($du = $dualreg->fetch_assoc())
                                              {
                                              ?>                                              
                                              <tr style="border-bottom:0px">  
                                                <td><?php echo $du['dt_nombre']; ?></td>  
                                                <td class="text-center"><?php echo $du['num_dual']; ?></td>  
                                              </tr> 

                                              <?php
                                                }

                                              ?>  
    </tbody>
  </table>
</div>

<div class="col-md-6">
<h4>Día 2. Emprendimiento asociativo</h4>
<table class="table table-bordered">    
    <thead>
      <tr>
                <th>Mesa</th>
                <th class="text-center"># Asistente general</th>
            </tr>
    </thead>
    <tbody>
     <?php
                                             $counter = 1;

                                              while($emp = $emprenreg->fetch_assoc())
                                              {
                                              ?>                                              
                                              <tr style="border-bottom:0px">  
                                                <td><?php echo $emp['dt_nombre']; ?></td>  
                                                <td class="text-center"><?php echo $emp['num_dual']; ?></td>  
                                              </tr> 

                                              <?php
                                                }

                                              ?>  
    </tbody>
  </table>
</div>
</div>


                             
                     </div>
                  </div>
         </section>
      </main>
      <!-- Main Wrapper -->
      <script src="../assets/js/popper.min.js"></script>
      <script src="../assets/js/bootstrap.min.js"></script>
      <script src="../assets/js/wow.min.js"></script>
      <script src="../assets/js/counterup.min.js"></script>
      <script src="../assets/js/jquery.downCount.js"></script>
      <script src="../assets/js/jquery.fancybox.min.js"></script>
      <script src="../assets/js/jquery.bootstrap-touchspin.min.js"></script>
      <script src="../assets/js/perfect-scrollbar.min.js"></script>
      <script src="../assets/js/slick.min.js"></script>
      <script src="../assets/js/isotope.min.js"></script>
      <script src="../assets/js/custom-scripts.js"></script>        
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="../assets/js/bootstrap-multiselect.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="../assets/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript">
       $(document).ready(function() {
    $('#example').DataTable();
} );
      </script>

   </body>
</html>

