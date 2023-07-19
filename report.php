<?php 
   include_once('databases_registro.php');      
   mysqli_set_charset( $mysqli, 'utf8');
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
         

 <div class="container-fluid mx-0 px-0" style="background-color: #8D203D;">
         <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg navigation">
               <img alt="Responsive image" class="img-fluid" src="img/logo.png" width="150">
               <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                  <span class="navbar-toggler-icon"> </span>
               </button>              
            </nav>
         </div>
      </div>

<div class="container">
                     <div class="row ">
                        <br><br><br></div>
                        <br><br><br>
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

</div>

<div class="container">
<table id="example" class="table table-responsive table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Región</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Organización</th>
                <th>Participación</th>
                <th>Estatus</th>
            </tr>
        </thead>
        <tbody>
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
                                                 <td>
                                                      <?php if($reg['dt_mesa1']!=NULL) 
                                                            { 
                                                                ?>
                                                        <p>Mesa: Reunión de de responsables de vinculación de las IES</p>
                                                                <?php
                                                          
                                                            }  ?> 

                                                            <?php if($reg['dt_mesa2']!=NULL) 
                                                            { 
                                                                ?>
                                                                 <p>Mesa 1: Emprendimiento asociativo(ESS)</p>
                                                                <?php
                                                          
                                                            }  ?> 

                                                            <?php if($reg['dt_mesa3']!=NULL) 
                                                            { 
                                                                ?>
                                                                 <p>Mesa 2: Educación Dual</p>
                                                                <?php
                                                          
                                                            }  ?>

                                                             <?php if($reg['dt_mesa4']!=NULL) 
                                                            { 
                                                                ?>
                                                                 <p>Mesa 3: Servicio Social</p>
                                                                <?php
                                                          
                                                            }  ?>

                                                 </td>

                                                 <td>

                                                     <?php if($reg['tp_estatus']==0) 
                                                            { 
                                                                ?>
                                                                 <form action="update_new.php" method="POST">
                                                                   <div class="form-group">
                                                                      <input type="hidden"  name="id" value="<?php echo $reg['id_usuario']?>"> 
                                                                       <button type="submit" class="btn btn-primary">Validar </button>
                                                                   </div>
                                                                 </form>
                                                                <?php
                                                          
                                                            } else{  ?>
                                                                 <button type="submit" class="btn btn-success">Asistente</button>
                                                            <?php } ?>


                                                 </td> 

                                              </tr> 

                                              <?php
                                                }

                                              ?>  
           

            
        </tbody>
    </table>
</div>
                             




   </body>
</html>















