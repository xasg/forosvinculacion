<?php 
   include_once('model/databases_usuario.php');
   session_start();
   mysqli_set_charset( $mysqli, 'utf8');  
   $id=$_SESSION["id"];   
   $participante=run_participante($id);
   $region=$participante['dt_region'];  
   $registro_dia1=run_dia_uno($id, $region);
   $registro_dia2=run_dia_dos($id, $region);
   $registro_diaambos=run_dia_ambos($id, $region);
   $registro_occidente=run_occidente($id, $region);


   $sql = "SELECT COUNT(*) AS total FROM `asistencia` LEFT JOIN cat_mesas ON(asistencia.dt_mesa=cat_mesas.id_cat_mesa) LEFT JOIN usuario ON(usuario.id_usuario=asistencia.id_usuario) WHERE asistencia.`id_usuario`='{$id}' AND cat_mesas.id_cat_region='{$region}' AND asistencia.dt_participacion='dia1'";
   $result = mysqli_query($mysqli, $sql);
   $Total1 = mysqli_fetch_assoc($result);

   $sql = "SELECT COUNT(*) AS total FROM `asistencia` LEFT JOIN cat_mesas ON(asistencia.dt_mesa=cat_mesas.id_cat_mesa) LEFT JOIN usuario ON(usuario.id_usuario=asistencia.id_usuario) WHERE asistencia.`id_usuario`='{$id}' AND cat_mesas.id_cat_region='{$region}' AND asistencia.dt_participacion='dia2'";
   $result = mysqli_query($mysqli, $sql);
   $Total2 = mysqli_fetch_assoc($result);

   $sql = "SELECT COUNT(*) AS total FROM `asistencia` LEFT JOIN cat_mesas ON(asistencia.dt_mesa=cat_mesas.id_cat_mesa) LEFT JOIN usuario ON(usuario.id_usuario=asistencia.id_usuario) WHERE asistencia.`id_usuario`='{$id}' AND cat_mesas.id_cat_region='{$region}' AND asistencia.dt_participacion='ambos'";
   $result = mysqli_query($mysqli, $sql);
   $Totalambos = mysqli_fetch_assoc($result);


   ?>
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
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="registro.php">REGISTRO</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link"  href="#">CONTACTO</a>
              </li>
            </ul>
        </div>
   </nav> 
           
         <section>
            <div class="w-100 pt-180  text-center black-layer position-relative"> 
            <div class="checkout-form w-100">              
            </div>
         </section>
         <section>
            <div class="w-100 pt-140 pb-120 position-relative">
               <div class="container">
                    <div class="row">
                       <div class="col-md-12">  <br><br>
                        <h5>Hola, </h5><br>
                        <h6>Tu registro a las mesas a los Segundos Foros de Vinculación <strong> de la región <?php echo $participante['dt_nombre_region']; ?> se realizó con éxito.</strong></h6>
                        <p>Si deseas participar en alguna otra región comunícate a rmendez@fese.mx </p>                         
                      </div>
                      <div class="col-md-12" style="background-color: #ffeeba;"> <br>                         
                        <p><strong>Te pedimos que estés atento a tu correo que ingresaste, ya que te llegaran los accesos de zoom de de las mesas que seleccionaste. </strong></p>
                      </div>

                    </div>
                    <?php if($Total1['total']>0) { ?>
                     <div class="row"><br>
                        <div class="col-md-12">                           
                        </div>
                         
                         <div class="col-md-12">
                                    <h5>Dia 1. Emprendimiento Asociativo y Educación Dual</h5>
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                      <thead>
                                          <tr>  
                                                <th>FECHA</th>
                                                <th>HORARIO</th>
                                                <th>ACTIVIDAD</th>
                                                <th>REGISTRO</th>
                                          </tr>
                                      </thead>
                                            <tbody>                                             
                                              
                                              <?php
                                               $counter = 1;

                                              while($reg = $registro_dia1->fetch_assoc())
                                              {
                                              ?>                                              
                                              <tr>
                                            <td><?php echo $reg['dt_fecha']; ?></td>
                                            <td><?php echo $reg['dt_horario_inicio']." - ".$reg['dt_horario_fin'];?></td>
                                            <td><?php echo $reg['dt_nombre']; ?><a href="<?php echo $reg['dt_liga_doc']; ?>" target="black"><br>Documento que es propósito de discusión en la Mesa, da clic aquí para descargar </a></td>
                                                <td><a href="<?php echo $reg['dt_liga']; ?>" target="black"><button class="btn btn-block btn-primary">Registrar</button></a>
                                                </td>                                                
                                              </tr> 
                                              <?php
                                                }
                                              ?>  
                                            </tbody>         
                                    </table>
                                </div>
                      </div>
                      <?php } ?>

                       <?php if($Total2['total']>0) { ?>
                      <div class="row">                        
                         <div class="col-xl-12">
                                    <h5>Día 2. Reorientación del servicio social</h5>
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                      <thead>
                                          <tr>  
                                                <th>FECHA</th>
                                                <th>HORARIO</th>
                                                <th>ACTIVIDAD</th>
                                                <th>REGISTRO</th>
                                          </tr>
                                      </thead>
                                            <tbody>                                             
                                              
                                              <?php
                                               $counter = 1;

                                              while($reg2 = $registro_dia2->fetch_assoc())
                                              {
                                              ?>                                              
                                              <tr>
                                                <td><?php echo $reg2['dt_fecha']; ?></td>
                                                <td><?php echo $reg2['dt_horario_inicio']." - ".$reg2['dt_horario_fin'];?></td>
                                                <td><?php echo $reg2['dt_nombre']; ?><a href="<?php echo $reg2['dt_liga_doc']; ?>" target="black"><br>Documento que es propósito de discusión en la Mesa, da clic aquí para descargar </a></td>
                                                <td><a href="<?php echo $reg2['dt_liga']; ?>" target="black"><button class="btn btn-block btn-primary">Registrar</button></a>
                                                </td>                                                
                                              </tr> 
                                              <?php
                                                }
                                              ?>  
                                            </tbody>         
                                    </table>
                                </div> 

                      </div>
                    <?php } ?>

                    <?php if($Totalambos['total']>0) { ?>
                      <div class="row">                        
                         <div class="col-xl-12">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                      <thead>
                                          <tr>  
                                                <th>FECHA</th>
                                                <th>HORARIO</th>
                                                <th>ACTIVIDAD</th>
                                                <th>REGISTRO</th>
                                          </tr>
                                      </thead>
                                            <tbody>                                             
                                              
                                              <?php
                                               $counter = 1;

                                              while($regambos = $registro_diaambos->fetch_assoc())
                                              {
                                              ?>                                              
                                              <tr>
                                                <td><?php echo $regambos['dt_fecha']; ?></td>
                                                <td><?php echo $regambos['dt_horario_inicio']." - ".$regambos['dt_horario_fin'];?></td>
                                                <td><?php echo $regambos['dt_nombre']; ?><a href="<?php echo $regambos['dt_liga_doc']; ?>" target="black"><br>Documento que es propósito de discusión en la Mesa, da clic aquí para descargar </a></td>
                                                <td><a href="<?php echo $regambos['dt_liga']; ?>" target="black"><button class="btn btn-block btn-primary">Registrar</button></a>
                                                </td>                                                
                                              </tr> 
                                              <?php
                                                }
                                              ?>  
                                            </tbody>         
                                    </table>
                                </div> 

                      </div>
                    <?php } ?>

                    <?php if($region==03) { ?>
                      <div class="row">                        
                         <div class="col-xl-12">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                      <thead>
                                          <tr>  
                                                <th>FECHA</th>
                                                <th>HORARIO</th>
                                                <th>ACTIVIDAD</th>
                                                <th>REGISTRO</th>
                                          </tr>
                                      </thead>
                                      <tbody>                                             
                                              
                                              <?php
                                               $counter = 1;

                                              while($regambos = $registro_occidente->fetch_assoc())
                                              {
                                              ?>                                              
                                              <tr>
                                                <td><?php echo $regambos['dt_fecha']; ?></td>
                                                <td><?php echo $regambos['dt_horario_inicio']." - ".$regambos['dt_horario_fin'];?></td>
                                                <td><?php echo $regambos['dt_nombre']; ?>
                                                <a href="<?php echo $regambos['dt_liga_doc']; ?>" target="black"><br>Documento que es propósito de discusión en la Mesa, da clic aquí para descargar </a>
                                                </td>
                                                <td><a href="<?php echo $regambos['dt_liga']; ?>" target="black"><button class="btn btn-block btn-primary">Registrar</button></a>
                                                </td>                                                
                                              </tr> 
                                              <?php
                                                }
                                              ?>  
                                            </tbody>    
                                                     
                                    </table>
                                </div> 

                      </div>
                    <?php } ?>




                  </div>
                </div>
              </section>
            </section>
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
              <footer style="background-color: #205b4e;" id="contacto">
                <div class="w-100 pt-121  opc1 position-relative">
                    <div class="container position-relative">
                        <div class="footer-wrap w-100 text-center">
                            <div class="footer-inner d-inline-block">
                                <div class="logo d-inline-block">
                                    <h1 class="mb-0">
                                        <a href="index.html" title=""><br>
                                            <img src="img/Logo_b.png" class="img-fluid" alt="Responsive image">
                                        </a>
                                    </h1>
                                </div>
                                <p class="mb-0" style="color: #fff">Contacto:</p>
                                <p class="mb-0" style="color: #fff">forosdevinculacion@fese.mx</p>
                            </div>
                            <div class="footer-bottom d-flex flex-wrap justify-content-between w-100">                              
                            </div>
                        </div>
                    </div>
                </div>
            </footer><!-- Footer -->
     <script src="js/bootstrap.min.js"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   </body>
</html>