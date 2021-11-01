<?php 
   session_start();  
   include_once('databases_usuario.php');   
   mysqli_set_charset( $mysqli, 'utf8');
   $resumen = run_asistencia_resumen();

  $sql = "SELECT COUNT(*) as total FROM `usuario`";
  $result = mysqli_query($mysqli, $sql);
  $fila = mysqli_fetch_assoc($result);
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



<table class="table table-striped">
    <h4>Total de registros<?php echo " ".$fila['total'];?></h4>
    <thead>
      <tr>
                <th class="text-center"><h4>Región</h4></th>
                <th class="text-center"><h4># Registros</h4></th>
            </tr>
    </thead>
    <tbody>
     <?php
                                             $counter = 1;

                                              while($res = $resumen->fetch_assoc())
                                              {
                                              ?>                                              
                                              <tr style="border-bottom:0px">  
                                                <td class="text-center"><?php echo $res['dt_nombre_region']; ?></td>  
                                                <td class="text-center"><?php echo $res['numero']; ?></td>  
                                              </tr> 

                                              <?php
                                                }

                                              ?>  
    </tbody>
  </table>
                             
                     </div>

   </body>
</html>