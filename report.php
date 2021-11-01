<?php 
   include_once('databases_usuario.php');      
   mysqli_set_charset( $mysqli, 'utf8');
   $registros = run_registros_tall();
   ?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" href="assets/images/favicon.png" sizes="35x35" type="image/png">
      <title>Registro</title>
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="assets/css/jquery.dataTables.css">
   </head>
   <body>
         

   <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <img src="img/Logo_b.png" class="img-fluid" alt="Responsive image">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto" style="color:#fff">
              <li class="nav-item active">
                <a class="nav-link" href="./">INICIO</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">CALENDARIO</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">MEMORIA</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#">REGISTRO</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link"  href="#">CONTACTO</a>
              </li>
            </ul>
        </div>
   </nav> 

   <div class="container">
                     <div class="row ">
                        <br><br><br></div><br><br><br>
                      <div class="col-md-12">
                                 <ul class="nav nav-tabs">
                                       <li class="nav-item">
                                        <a class="nav-link active" href="report_resumen.php">Resumen</a> 
                                        </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="report.php">Registros</a>
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
                                                <td><?php echo $reg['dt_nombre']." ".$reg['dt_apellidos']; ?></td>
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="assets/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript">
       $(document).ready(function() {
    $('#example').DataTable();
} );
      </script>

   </body>
</html>