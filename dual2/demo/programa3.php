<?php 
   include_once('model/databases_usuario.php');
   session_start();
   mysqli_set_charset( $mysqli, 'utf8');  
   $id=$_SESSION["id"];
   $registro_dia1 = run_registro_dia1($id);
   $registro_dia2 = run_registro_dia2($id);
   $registro_dia1_ambos = run_registro_dia1_ambos($id);
   $registro_dia2_ambos = run_registro_dia2_ambos($id);
   $participante = run_participante($id);
   ini_set('date.timezone','America/Mexico_City');
   $time = date('H:i:s ', time());
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
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
      <link rel="stylesheet" href="assets/css/jquery.bootstrap-touchspin.min.css">
      <link rel="stylesheet" href="assets/css/perfect-scrollbar.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/responsive.css">
      <link rel="stylesheet" href="assets/css/color.css">
      <link rel="stylesheet" href="assets/css/bootstrap-multiselect.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>
      <main>
          <header class="stick style1 w-100" style=" background-color: #860f01;">
                <div class="container">
                    <div class="logo-menu-wrap w-100 d-flex flex-wrap justify-content-between align-items-start">
                        <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="assets/images/img/logoforos.png" alt="Logo" srcset="assets/images/img/logoforos.png"></a></h1></div><!-- Logo -->
                        <nav class="d-inline-flex align-items-center">
                            <div class="header-left">
                                <ul class="mb-0 list-unstyled d-inline-flex">
                                    <li class="menu-item-has-children"><a href="index.html" title="">Salir</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div><!-- Logo Menu Wrap -->
                </div>
            </header><!-- Header -->
            <div class="menu-wrap">
                <span class="menu-close"><i class="fas fa-times"></i></span>
                <ul class="mb-0 list-unstyled w-100">
                    <li class="menu-item-has-children"><a href="index.html" title="">Salir</a></li>
                </ul>
            </div><!-- Menu Wrap -->
         <section>
           
         <section>
            <div class="w-100 pt-180  text-center black-layer position-relative">                   
            </div>
         </section>


       <?php if($participante['dt_region']=="01"){ ?>
         <section>
            <div class="w-100 pt-140 pb-120 position-relative">
               <div class="container">
                  <div class="checkout-wrap w-100">
                     <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                           <div class="checkout-form w-100">
                            <h2 class="mb-0">Foros de Vinculación para el fortalecimiento de la Educación Dual y el Emprendimiento Asociativo</h2><br>
                            <?php echo $time; ?>
                                <?php if($participante['dt_participacion']=="no"){ ?>
                                  <div class="row">
                                  <div class="col-xl-12">
                                       <p><strong> HOLA <?php echo $participante['dt_nombre']; ?> ESTE ES TU PROGRAMA PARA LA REGIÓN <?php echo $participante['dt_nombre_region']; ?></strong></p> 
                                       <p>Fecha: <strong><?php echo $participante['dt_fecha']; ?></strong></p>                      
                                  </div>
                                  </div>
                           <!-- NO PARTICIPARA EN MESAS -->
                                  <div class="row">                                    
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                    <h5>Día 1. Educación Dual</h5>
                                    <table id="example" class="table table-striped table-borde#98213A" style="width:100%">
                                      <thead>
                                          <tr>  
                                                <th>HORARIO</th>
                                                <th>ACTIVIDAD</th>
                                          </tr>
                                      </thead>
                                            <tbody>
                                              <tr>                  
                                                <td>09:30 – 10:00</td>
                                                <td>
                                                  <form action="controller/insert_evento/insertar_log.php" method="POST">
                                                  <strong>Inauguración del Foro</strong>
                                                  <?php if($time>"09:00" AND $time<="10:00") { ?>
                                                  <strong style="color: #98213A">(En este momento)</strong>
                                                  <input type="hidden" name="evento" value="inauguracion" />
                                                  <input type="hidden" name="liga" value="../../auditorio1.html" />
                                                  <button type="submit" class="btn btn-secondary" style="width: 120px;">ver</button>
                                                  <?php } elseif($time>"10:00") { ?>
                                                    <strong style="color: #98213A">(Finalizó)</strong>
                                                  <?php }  else { ?>
                                                   
                                                  <?php }  ?>
                                                  </form>          
                                                </td>
                                              </tr>
                                               <tr>                  
                                                <td>10:00 – 10:20</td>
                                                <form action="controller/insert_evento/insertar_log.php" method="POST">
                                                <td>Presentación del propósito y dinámica de trabajo
                                                <?php if($time>"10:00" AND $time<="10:20") { ?>
                                                  <strong style="color: #98213A">(En este momento)</strong>
                                                  <input type="hidden" name="evento" value="proposito" />
                                                  <input type="hidden" name="liga" value="../../auditorio1.html" />
                                                  <button type="submit" class="btn btn-secondary" style="width: 120px;">ver</button>
                                                  <?php } elseif($time>"10:20") { ?>
                                                    <strong style="color: #98213A">(Finalizó)</strong>
                                                  <?php }  else { ?>
                                                        
                                                  <?php }  ?>
                                                  </td>
                                                   </form>                                                 
                                              </tr>
                                              <tr>                  
                                                <td>17:00 – 19:00</td>
                                                <form action="controller/insert_evento/insertar_log.php" method="POST">
                                                <td><strong>Presentaciones</strong> simultáneas de buenas prácticas de vinculación de la región:
                                                  <?php if($time>"17:00" AND $time<="19:00") { ?>
                                                  <strong style="color: #98213A">(En este momento)</strong>
                                                  <input type="hidden" name="evento" value="buenas" />
                                                  <input type="hidden" name="liga" value="../../auditorio1.html" />
                                                  <button type="submit" class="btn btn-secondary" style="width: 120px;">ver</button>
                                                  <?php } elseif($time>"19:00") { ?>
                                                    <strong style="color: #98213A">(Finalizó)</strong>
                                                  <?php } else { ?>
                                                    
                                                  <?php }  ?>
                                                </td>
                                                </form>
                                              </tr>

                                            </tbody>         
                                    </table>
                                  </div>
                                </div> 
                                <div class="row">
                                   <div class="col-md-12 col-sm-12 col-lg-12"><br>
                                    <h5>Día 2. Emprendimiento asociativo</h5>
                                    <table id="example" class="table table-striped table-borde#98213A" style="width:100%">
                                      <thead>
                                          <tr>  
                                                <th>HORARIO</th>
                                                <th>ACTIVIDAD</th>
                                          </tr>
                                      </thead>
                                            <tbody>
                                              <tr>                  
                                                <td>09:30 – 10:00</td>
                                                <form action="controller/insert_evento/insertar_log.php" method="POST">
                                                <td><strong>Bienvenida al segundo día</strong>
                                                  <?php if($time>"09:30" AND $time<="10:00") { ?>
                                                  <strong style="color: #98213A">(En este momento)</strong>
                                                  <input type="hidden" name="evento" value="bienvenida_dia2" />
                                                  <input type="hidden" name="liga" value="../../auditorio1.html" />
                                                  <button type="submit" class="btn btn-secondary" style="width: 120px;">ver</button>
                                                   <?php } elseif($time>"10:00") { ?>
                                                    <strong style="color: #98213A">(Finalizó)</strong>
                                                  <?php } else { ?>
                                                    
                                                  <?php }  ?>
                                                </td>
                                              </form>
                                              </tr>
                                              <tr>                  
                                              <td>10:00 – 10:20</td>
                                                <form action="controller/insert_evento/insertar_log.php" method="POST">
                                                <td>Presentación del propósito y dinámica de trabajo
                                                <?php if($time>"10:00" AND $time<="10:20") { ?>
                                                  <strong style="color: #98213A">(En este momento)</strong>
                                                  <input type="hidden" name="evento" value="proposito_dia2" />
                                                  <input type="hidden" name="liga" value="../../auditorio1.html" />
                                                  <button type="submit" class="btn btn-secondary" style="width: 120px;">ver</button>
                                                   <?php } elseif($time>"10:20") { ?>
                                                    <strong style="color: #98213A">(Finalizó)</strong>
                                                  <?php } else { ?>
                                                    
                                                  <?php }  ?>
                                                </td>
                                              </form>
                                              </tr>
                                              <tr>                  
                                                <td>17:00 – 19:00</td>
                                                <form action="controller/insert_evento/insertar_log.php" method="POST">
                                                <td>Conclusiones del Foro
                                                <?php if($time>"17:00" AND $time<="19:00") { ?>
                                                  <strong style="color: #98213A">(En este momento)</strong>
                                                  <input type="hidden" name="evento" value="conclusiones_dia2" />
                                                  <input type="hidden" name="liga" value="../../auditorio1.html" />
                                                  <button type="submit" class="btn btn-secondary" style="width: 120px;">ver</button>
                                                   <?php } elseif($time>"19:00") { ?>
                                                    <strong style="color: #98213A">(Finalizó)</strong>
                                                  <?php } else { ?>
                                                    
                                                  <?php }  ?>
                                                </td>
                                              </form>
                                              </tr>

                                            </tbody>         
                                    </table>
                                   </div>
                                </div> 
                        <!-- / NO PARTICIPARA EN MESAS -->
                                <?php } elseif($participante['dt_participacion']=="dia1") {  ?>
                                <div class="row">
                                  <div class="col-xl-12">
                                       <p><strong> HOLA <?php echo $participante['dt_nombre']; ?> ESTE ES TU PROGRAMA PARA LA REGIÓN <?php echo $participante['dt_nombre_region']; ?></strong></p>                    
                                  </div>
                        <!-- DIA 1  -->
                                  <div class="col-xl-12">
                                    <h5>Día 1. Educación Dual</h5>
                                    <?php if ($participante['dt_fecha']=="11 y 12 de noviembre"){ ?> 
                                       <p>Fecha: <strong>11 de noviembre</strong></p><br>
                                       <?php } elseif($participante['dt_fecha']=="17 y 18 de noviembre"){ ?> 
                                       <p>Fecha: <strong>17 de noviembre</strong></p><br>  
                                        <?php } elseif($participante['dt_fecha']=="19 y 20 de noviembre"){ ?> 
                                       <p>Fecha: <strong>19 de noviembre</strong></p><br>  
                                        <?php } elseif($participante['dt_fecha']=="23 y 24 de noviembre"){ ?> 
                                       <p>Fecha: <strong>23 de noviembre</strong></p><br>  
                                        <?php } elseif($participante['dt_fecha']=="26 y 27 de noviembre"){ ?> 
                                       <p>Fecha: <strong>26 de noviembre</strong></p><br>  
                                        <?php } ?>   
                                    <table id="example" class="table table-striped table-borde#98213A" style="width:100%">
                                      <thead>
                                          <tr>  
                                                <th>HORARIO</th>
                                                <th>ACTIVIDAD</th>
                                          </tr>
                                      </thead>
                                            <tbody>
                                             <tr>                  
                                                <td>09:30 – 10:00</td>
                                                <td>
                                                  <form action="controller/insert_evento/insertar_log.php" method="POST">
                                                  <strong>Inauguración del Foro</strong>
                                                  <?php if($time>"09:00" AND $time<="10:00") { ?>
                                                  <strong style="color: #98213A">(En este momento)</strong>
                                                  <input type="hidden" name="evento" value="inauguracion" />
                                                  <input type="hidden" name="liga" value="../../auditorio1.html" />
                                                  <button type="submit" class="btn btn-secondary" style="width: 120px;">ver</button>
                                                  <?php } elseif($time>"10:00") { ?>
                                                    <strong style="color: #98213A">(Finalizó)</strong>
                                                  <?php }  else { ?>
                                                   
                                                  <?php }  ?>
                                                  </form>
                                                </td>
                                              </tr>
                                               <tr>                  
                                                <td>10:00 – 10:20</td>
                                                <form action="controller/insert_evento/insertar_log.php" method="POST">
                                                <td>Presentación del propósito y dinámica de trabajo
                                                <?php if($time>"10:00" AND $time<="10:20") { ?>
                                                  <strong style="color: #98213A">(En este momento)</strong>
                                                  <input type="hidden" name="evento" value="proposito" />
                                                  <input type="hidden" name="liga" value="../../auditorio1.html" />
                                                  <button type="submit" class="btn btn-secondary" style="width: 120px;">ver</button>
                                                  <?php } elseif($time>"10:20") { ?>
                                                    <strong style="color: #98213A">(Finalizó)</strong>
                                                  <?php }  else { ?>
                                                        
                                                  <?php }  ?>
                                                  </td>
                                                  </form>                                            
                                              </tr>
                                            <?php
                                               $counter = 1;
                                              while($reg = $registro_dia1->fetch_assoc())
                                              {
                                              ?>                                              
                                              <tr>                                                
                                                <td><?php echo $reg['dt_horario_inicio']." - ".$reg['dt_horario_fin']; ?></td>
                                                <td>
                                                <form action="controller/insert_evento/insertar_log.php" method="POST">
                                                <?php echo $reg['mesa']; ?>
                                                <?php if($time>$reg["dt_horario_inicio"] AND $time<=$reg["dt_horario_fin"]) { ?>
                                                  <strong style="color: #98213A">(En este momento)</strong>
                                                  <input type="hidden" name="evento" value="<?php echo $reg['mesa'] ?>" />
                                                  <input type="hidden" name="liga" value="<?php echo $reg['dt_liga'] ?>" />
                                                  <button type="submit" class="btn btn-secondary" style="width: 120px;">ver</button>
                                                 <?php } elseif($time>$reg["dt_horario_fin"]) { ?>
                                                    <strong style="color: #98213A">(Finalizó)</strong>
                                                  <?php } else { ?>
                                                    
                                                  <?php }  ?>
                                                <br>Tipo de participación: <strong><?php echo $reg['dt_tipo_asistente']; ?></strong>
                                                  <?php if ($reg['dt_tipo_asistente']=="expositor") { ?>
                                                    <p> En breve nos comunicaremos contigo para explicarte más acerca de la dinámica de trabajo.</p>
                                                  <?php } ?>
                                                </form>
                                                </td>
                                              </tr> 
                                              <?php
                                                }
                                              ?> 
                                              <tr>                  
                                                <td>17:00 – 19:00</td>
                                                <form action="controller/insert_evento/insertar_log.php" method="POST">
                                                <td><strong>Presentaciones</strong> simultáneas de buenas prácticas de vinculación de la región:
                                                  <?php if($time>"17:00" AND $time<="19:00") { ?>
                                                  <strong style="color: #98213A">(En este momento)</strong>
                                                  <input type="hidden" name="evento" value="buenas" />
                                                  <input type="hidden" name="liga" value="../../auditorio1.html" />
                                                  <button type="submit" class="btn btn-secondary" style="width: 120px;">ver</button>
                                                  <?php } elseif($time>"19:00") { ?>
                                                    <strong style="color: #98213A">(Finalizó)</strong>
                                                  <?php } else { ?>
                                                    
                                                  <?php }  ?>
                                                </td>
                                                </form>
                                              </tr>

                                            </tbody>         
                                    </table>
                                </div> 
                              </div>
                        <!--  / DIA 1 -->

                              <?php } elseif($participante['dt_participacion']=="dia2") {  ?>
                         <!-- DIA 2 -->        
                                <div class="row">
                                <div class="col-xl-12">
                                       <p><strong> HOLA <?php echo $participante['dt_nombre']; ?> ESTE ES TU PROGRAMA PARA LA REGIÓN <?php echo $participante['dt_nombre_region']; ?></strong></p>                    
                                </div>                                
                                <div class="col-xl-12">
                                    <h5>Día 2. Emprendimiento asociativo</h5>
                                    <?php if ($participante['dt_fecha']=="11 y 12 de noviembre"){ ?> 
                                       <p>Fecha: <strong>12 de noviembre</strong></p>
                                       <?php } elseif($participante['dt_fecha']=="17 y 18 de noviembre"){ ?> 
                                       <p>Fecha: <strong>18 de noviembre</strong></p>  
                                        <?php } elseif($participante['dt_fecha']=="19 y 20 de noviembre"){ ?> 
                                       <p>Fecha: <strong>20 de noviembre</strong></p>
                                        <?php } elseif($participante['dt_fecha']=="23 y 24 de noviembre"){ ?> 
                                       <p>Fecha: <strong>24 de noviembre</strong></p>
                                        <?php } elseif($participante['dt_fecha']=="26 y 27 de noviembre"){ ?> 
                                       <p>Fecha: <strong>27 de noviembre</strong></p> 
                                  <?php } ?>
                                    <table id="example" class="table table-striped table-borde#98213A" style="width:100%">
                                      <thead>
                                          <tr>  
                                                <th>HORARIO</th>
                                                <th>ACTIVIDAD</th>
                                          </tr>
                                      </thead>
                                            <tbody>
                                              <tr>                  
                                                <td>09:30 – 10:00</td>
                                                <form action="controller/insert_evento/insertar_log.php" method="POST">
                                                <td><strong>Bienvenida al segundo día</strong>
                                                  <?php if($time>"09:30" AND $time<="10:00") { ?>
                                                  <strong style="color: #98213A">(En este momento)</strong>
                                                  <input type="hidden" name="evento" value="bienvenida_dia2" />
                                                  <input type="hidden" name="liga" value="../../auditorio1.html" />
                                                  <button type="submit" class="btn btn-secondary" style="width: 120px;">ver</button>
                                                   <?php } elseif($time>"10:00") { ?>
                                                    <strong style="color: #98213A">(Finalizó)</strong>
                                                  <?php } else { ?>
                                                    
                                                  <?php }  ?>
                                                </td>
                                              </form>
                                              </tr>
                                              <tr>                  
                                              <td>10:00 – 10:20</td>
                                                <form action="controller/insert_evento/insertar_log.php" method="POST">
                                                <td>Presentación del propósito y dinámica de trabajo
                                                <?php if($time>"10:00" AND $time<="10:20") { ?>
                                                  <strong style="color: #98213A">(En este momento)</strong>
                                                  <input type="hidden" name="evento" value="proposito_dia2" />
                                                  <input type="hidden" name="liga" value="../../auditorio1.html" />
                                                  <button type="submit" class="btn btn-secondary" style="width: 120px;">ver</button>
                                                   <?php } elseif($time>"10:20") { ?>
                                                    <strong style="color: #98213A">(Finalizó)</strong>
                                                  <?php } else { ?>
                                                    
                                                  <?php }  ?>
                                                </td>
                                              </form>
                                              </tr> 
                                             <?php
                                               $counter = 1;
                                              while($reg2 = $registro_dia2->fetch_assoc())
                                              {
                                              ?>                                              
                                              <tr>                  
                                                <td><?php echo $reg2['dt_horario_inicio']." - ".$reg2['dt_horario_fin']; ?></td>
                                                <form action="controller/insert_evento/insertar_log.php" method="POST">
                                                <td><?php echo $reg2['mesa']; ?>
                                                <?php if($time>$reg2["dt_horario_inicio"] AND $time<=$reg2["dt_horario_fin"]) { ?>
                                                   <strong style="color: #98213A">(En este momento)</strong>
                                                  <input type="hidden" name="evento" value="<?php echo $reg2['mesa'] ?>" />
                                                  <input type="hidden" name="liga" value="<?php echo $reg2['dt_liga'] ?>" />
                                                  <button type="submit" class="btn btn-secondary" style="width: 120px;">ver</button>
                                                 <?php } elseif($time>$reg2["dt_horario_fin"]) { ?>
                                                    <strong style="color: #98213A">(Finalizó)</strong>
                                                  <?php } else { ?>
                                                    
                                                  <?php }  ?>
                                                <br>Tipo de participación: <strong><?php echo $reg2['dt_tipo_asistente']; ?></strong>
                                                  <?php if ($reg2['dt_tipo_asistente']=="expositor") { ?>
                                                    <p> En breve nos comunicaremos contigo para explicarte más acerca de la dinámica de trabajo.</p>
                                                  <?php } ?>
                                                </td>
                                                </form>
                                              </tr> 
                                              <?php
                                                }
                                              ?>
                                              <tr>                  
                                                <td>17:00 – 19:00</td>
                                                <form action="controller/insert_evento/insertar_log.php" method="POST">
                                                <td>Conclusiones del Foro
                                                <?php if($time>"17:00" AND $time<="19:00") { ?>
                                                  <strong style="color: #98213A">(En este momento)</strong>
                                                  <input type="hidden" name="evento" value="conclusiones_dia2" />
                                                  <input type="hidden" name="liga" value="../../auditorio1.html" />
                                                  <button type="submit" class="btn btn-secondary" style="width: 120px;">ver</button>
                                                   <?php } elseif($time>"19:00") { ?>
                                                    <strong style="color: #98213A">(Finalizó)</strong>
                                                  <?php } else { ?>
                                                    
                                                  <?php }  ?>
                                                </td>
                                              </form>
                                              </tr>
                                            </tbody>         
                                    </table>  
                                  </div> 
                                  </div> 
                        <!-- / DIA 2 -->
                                <?php } elseif($participante['dt_participacion']=="ambos") {  ?>
                                 <div class="row">
                                  <div class="col-xl-12">
                                       <p><strong> HOLA <?php echo $participante['dt_nombre']; ?> ESTE ES TU PROGRAMA PARA LA REGIÓN <?php echo $participante['dt_nombre_region']; ?></strong></p>                    
                                  </div>
                                  <div class="col-xl-12">
                                    <h5>Día 1. Educación Dual</h5>
                                       <?php if ($participante['dt_fecha']=="11 y 12 de noviembre"){ ?> 
                                       <p>Fecha: <strong>11 de noviembre</strong></p><br>
                                       <?php } elseif($participante['dt_fecha']=="17 y 18 de noviembre"){ ?> 
                                       <p>Fecha: <strong>17 de noviembre</strong></p><br>  
                                        <?php } elseif($participante['dt_fecha']=="19 y 20 de noviembre"){ ?> 
                                       <p>Fecha: <strong>19 de noviembre</strong></p><br>  
                                        <?php } elseif($participante['dt_fecha']=="23 y 24 de noviembre"){ ?> 
                                       <p>Fecha: <strong>23 de noviembre</strong></p><br>  
                                        <?php } elseif($participante['dt_fecha']=="26 y 27 de noviembre"){ ?> 
                                       <p>Fecha: <strong>26 de noviembre</strong></p> 
                                        <?php } ?> 
                                    <table id="example" class="table table-striped table-borde#98213A" style="width:100%">
                                      <thead>
                                          <tr>  
                                                <th>HORARIO</th>
                                                <th>ACTIVIDAD</th>
                                          </tr>
                                      </thead>
                                            <tbody>
                                             <form action="controller/event.php" method="POST">
                                              <tr>                  
                                                <td>09:30 – 10:00</td>
                                                <td>
                                                  <form action="controller/insert_evento/insertar_log.php" method="POST">
                                                  <strong>Inauguración del Foro</strong>
                                                  <?php if($time>"09:00" AND $time<="10:00") { ?>
                                                  <strong style="color: #98213A">(En este momento)</strong>
                                                  <input type="hidden" name="evento" value="inauguracion" />
                                                  <input type="hidden" name="liga" value="../../auditorio1.html" />
                                                  <button type="submit" class="btn btn-secondary" style="width: 120px;">ver</button>
                                                  <?php } elseif($time>"10:00") { ?>
                                                    <strong style="color: #98213A">(Finalizó)</strong>
                                                  <?php }  else { ?>
                                                   
                                                  <?php }  ?>
                                                  </form>          
                                                </td>
                                              </tr>
                                               <tr>                  
                                                <td>10:00 – 10:20</td>
                                                <form action="controller/insert_evento/insertar_log.php" method="POST">
                                                <td>Presentación del propósito y dinámica de trabajo
                                                <?php if($time>"10:00" AND $time<="10:20") { ?>
                                                  <strong style="color: #98213A">(En este momento)</strong>
                                                  <input type="hidden" name="evento" value="proposito" />
                                                  <input type="hidden" name="liga" value="../../auditorio1.html" />
                                                  <button type="submit" class="btn btn-secondary" style="width: 120px;">ver</button>
                                                  <?php } elseif($time>"10:20") { ?>
                                                    <strong style="color: #98213A">(Finalizó)</strong>
                                                  <?php }  else { ?>
                                                        
                                                  <?php }  ?>
                                                  </td>
                                                </form>                                                 
                                              </tr>
                                              <?php
                                               $counter = 1;
                                              while($regambos1 = $registro_dia1_ambos->fetch_assoc())
                                              {
                                              ?>                                              
                                              <tr>                  
                                                <td><?php echo $regambos1['dt_horario_inicio']." - ".$regambos1['dt_horario_fin']; ?></td>
                                                <form action="controller/insert_evento/insertar_log.php" method="POST">
                                                <td><?php echo $regambos1['mesa']; ?>
                                                 <?php if($time>$regambos1["dt_horario_inicio"] AND $time<=$regambos1["dt_horario_fin"]) { ?>
                                                   <strong style="color: #98213A">(En este momento)</strong>
                                                  <input type="hidden" name="evento" value="<?php echo $regambos1['mesa'] ?>" />
                                                  <input type="hidden" name="liga" value="<?php echo $regambos1['dt_liga'] ?>" />
                                                  <button type="submit" class="btn btn-secondary" style="width: 120px;">ver</button>
                                                 <?php } elseif($time>$regambos1["dt_horario_fin"]) { ?>
                                                    <strong style="color: #98213A">(Finalizó)</strong>
                                                  <?php } else { ?>
                                                    
                                                  <?php }  ?>
                                                <br>Tipo de participación: <strong><?php echo $regambos1['dt_tipo_asistente']; ?></strong>
                                                  <?php if ($regambos1['dt_tipo_asistente']=="expositor") { ?>
                                                    <p> En breve nos comunicaremos contigo para explicarte más acerca de la dinámica de trabajo.</p>
                                                  <?php } ?>
                                                </td>
                                                </form>
                                              </tr> 
                                              <?php
                                                }
                                              ?>  
                                              <tr>                  
                                                <td>17:00 – 19:00</td>
                                                <form action="controller/insert_evento/insertar_log.php" method="POST">
                                                <td><strong>Presentaciones</strong> simultáneas de buenas prácticas de vinculación de la región:
                                                  <?php if($time>"17:00" AND $time<="19:00") { ?>
                                                  <strong style="color: #98213A">(En este momento)</strong>
                                                  <input type="hidden" name="evento" value="buenas" />
                                                  <input type="hidden" name="liga" value="../../auditorio1.html" />
                                                  <button type="submit" class="btn btn-secondary" style="width: 120px;">ver</button>
                                                  <?php } elseif($time>"19:00") { ?>
                                                    <strong style="color: #98213A">(Finalizó)</strong>
                                                  <?php } else { ?>
                                                    
                                                  <?php }  ?>
                                                </td>
                                                </form>
                                              </tr>

                                            </tbody>         
                                    </table>
                                </div> 
                                </div>

                                <div class="row"><!--row-->
                                <div class="col-xl-12"><br>
                                    <h5>Día 2. Emprendimiento asociativo</h5>
                                     <?php if ($participante['dt_fecha']=="11 y 12 de noviembre"){ ?> 
                                       <p>Fecha: <strong>12 de noviembre</strong></p>
                                       <?php } elseif($participante['dt_fecha']=="17 y 18 de noviembre"){ ?> 
                                       <p>Fecha: <strong>18 de noviembre</strong></p>  
                                        <?php } elseif($participante['dt_fecha']=="19 y 20 de noviembre"){ ?> 
                                       <p>Fecha: <strong>20 de noviembre</strong></p>
                                        <?php } elseif($participante['dt_fecha']=="23 y 24 de noviembre"){ ?> 
                                       <p>Fecha: <strong>24 de noviembre</strong></p>
                                        <?php } elseif($participante['dt_fecha']=="26 y 27 de noviembre"){ ?> 
                                       <p>Fecha: <strong>27 de noviembre</strong></p> 
                                  <?php } ?>
                                    <table id="example" class="table table-striped table-borde#98213A" style="width:100%">
                                      <thead>
                                          <tr>  
                                                <th>HORARIO</th>
                                                <th>ACTIVIDAD</th>
                                          </tr>
                                      </thead>
                                            <tbody>
                                              <tr>                  
                                                <td>09:30 – 10:00</td>
                                                <form action="controller/insert_evento/insertar_log.php" method="POST">
                                                <td><strong>Bienvenida al segundo día</strong>
                                                  <?php if($time>"09:30" AND $time<="10:00") { ?>
                                                  <strong style="color: #98213A">(En este momento)</strong>
                                                  <input type="hidden" name="evento" value="bienvenida_dia2" />
                                                  <input type="hidden" name="liga" value="../../auditorio1.html" />
                                                  <button type="submit" class="btn btn-secondary" style="width: 120px;">ver</button>
                                                   <?php } elseif($time>"10:00") { ?>
                                                    <strong style="color: #98213A">(Finalizó)</strong>
                                                  <?php } else { ?>
                                                    
                                                  <?php }  ?>
                                                </td>
                                              </form>
                                              </tr>
                                              <tr>                  
                                              <td>10:00 – 10:20</td>
                                                <form action="controller/insert_evento/insertar_log.php" method="POST">
                                                <td>Presentación del propósito y dinámica de trabajo
                                                <?php if($time>"10:00" AND $time<="10:20") { ?>
                                                  <strong style="color: #98213A">(En este momento)</strong>
                                                  <input type="hidden" name="evento" value="proposito_dia2" />
                                                  <input type="hidden" name="liga" value="../../auditorio1.html" />
                                                  <button type="submit" class="btn btn-secondary" style="width: 120px;">ver</button>
                                                   <?php } elseif($time>"10:20") { ?>
                                                    <strong style="color: #98213A">(Finalizó)</strong>
                                                  <?php } else { ?>
                                                    
                                                  <?php }  ?>
                                                </td>
                                              </form>
                                              </tr> 
                                              <?php
                                               $counter = 1;

                                              while($regambos2 = $registro_dia2_ambos->fetch_assoc())
                                              {
                                              ?>                                              
                                              <tr>                  
                                                <td><?php echo $regambos2['dt_horario_inicio']." - ".$regambos2['dt_horario_fin']; ?></td>
                                                <form action="controller/insert_evento/insertar_log.php" method="POST">
                                                <td><?php echo $regambos2['mesa']; ?>
                                                 <?php if($time>$regambos2["dt_horario_inicio"] AND $time<=$regambos2["dt_horario_fin"]) { ?>
                                                   <strong style="color: #98213A">(En este momento)</strong>
                                                  <input type="hidden" name="evento" value="<?php echo $regambos2['mesa'] ?>" />
                                                  <input type="hidden" name="liga" value="<?php echo $regambos2['dt_liga'] ?>" />
                                                  <button type="submit" class="btn btn-secondary" style="width: 120px;">ver</button>
                                                 <?php } elseif($time>$regambos2["dt_horario_fin"]) { ?>
                                                    <strong style="color: #98213A">(Finalizó)</strong>
                                                  <?php } else { ?>
                                                    
                                                  <?php }  ?>
                                                <br>Tipo de participación: <strong><?php echo $regambos2['dt_tipo_asistente']; ?></strong>
                                                  <?php if ($regambos2['dt_tipo_asistente']=="expositor") { ?>
                                                    <p> En breve nos comunicaremos contigo para explicarte más acerca de la dinámica de trabajo.</p>
                                                  <?php } ?>
                                                </td>
                                                </form>
                                              </tr> 
                                              <?php
                                                }

                                              ?>  
                                              <tr>                  
                                                <td>17:00 – 19:00</td>
                                                <form action="controller/insert_evento/insertar_log.php" method="POST">
                                                <td>Conclusiones del Foro
                                                <?php if($time>"17:00" AND $time<="19:00") { ?>
                                                  <strong style="color: #98213A">(En este momento)</strong>
                                                  <input type="hidden" name="evento" value="conclusiones_dia2" />
                                                  <input type="hidden" name="liga" value="../../auditorio1.html" />
                                                  <button type="submit" class="btn btn-secondary" style="width: 120px;">ver</button>
                                                   <?php } elseif($time>"19:00") { ?>
                                                    <strong style="color: #98213A">(Finalizó)</strong>
                                                  <?php } else { ?>
                                                    
                                                  <?php }  ?>
                                                </td>
                                              </form>
                                              </tr>
                                            </tbody>         
                                    </table>  
                                  </div> 
                                  </div> 
                              <?php } else {  ?>
                              <?php } ?>
                              </div>
                           </div><!--row-->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

       <?php } else { ?>

        <section>
            <div class="w-100 pt-140 pb-120 position-relative">
               <div class="container">
                  <div class="checkout-wrap w-100">
                     <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                           <div class="checkout-form w-100">
                              <h2 class="mb-0">Foros de Vinculación para el fortalecimiento de la Educación Dual y el Emprendimiento Asociativo</h2><br>
                                <?php if ($participante['dt_participacion']=="no"){ ?>
                                  <div class="row">
                                  <div class="col-xl-12">
                                       <p><strong> HOLA <?php echo $participante['dt_nombre']; ?> ESTE ES TU PROGRAMA PARA LA REGIÓN <?php echo $participante['dt_nombre_region']; ?></strong></p>                       
                                  </div>
                                  <div class="col-xl-12">
                                       <p>Fecha: <strong><?php echo $participante['dt_fecha']; ?></strong></p>                      
                                  </div>
                                  </div>
                                  <div class="row">                                    
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                    <h5>Día 1. Educación Dual</h5>
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                      <thead>
                                          <tr>  
                                                <th>HORARIO</th>
                                                <th>ACTIVIDAD</th>
                                          </tr>
                                      </thead>
                                            <tbody>
                                              <tr>                  
                                                <td>09:30 – 10:00</td>
                                                <td><strong>Inauguración del Foro</strong></td>
                                              </tr>
                                              <tr>                  
                                                <td>10:00 – 10:20</td>
                                                <td> Presentación del propósito y dinámica de trabajo</td>
                                              </tr>
                                              <tr>                  
                                                <td>17:00 – 19:00</td>
                                                <td><strong>Presentaciones</strong> simultáneas de buenas prácticas de vinculación de la región:</td>
                                              </tr>

                                            </tbody>         
                                    </table>
                                  </div>
                                </div> 
                                <div class="row">
                                   <div class="col-md-12 col-sm-12 col-lg-12"><br>
                                    <h5>Día 2. Emprendimiento asociativo</h5>
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                      <thead>
                                          <tr>  
                                                <th>HORARIO</th>
                                                <th>ACTIVIDAD</th>
                                          </tr>
                                      </thead>
                                            <tbody>
                                              <tr>                  
                                                <td>09:30 – 10:00</td>
                                                <td><strong>Bienvenida al segundo día</strong></td>
                                              </tr>
                                              <tr>                  
                                                <td>10:00 – 10:20</td>
                                                <td>Presentación del propósito y dinámica de trabajo</td>
                                              </tr>
                                              <tr>                  
                                                <td>17:00 – 19:00</td>
                                                <td>Conclusiones del Foro</td>
                                              </tr>

                                            </tbody>         
                                    </table>
                                   </div>
                                </div> 
                                <?php } elseif($participante['dt_participacion']=="dia1") {  ?>
                                <div class="row">
                                  <div class="col-xl-12">
                                       <p><strong> HOLA <?php echo $participante['dt_nombre']; ?> ESTE ES TU PROGRAMA PARA LA REGIÓN <?php echo $participante['dt_nombre_region']; ?></strong></p>                     
                                  </div>
                                  <div class="col-xl-12">
                                    <h5>Día 1. Educación Dual</h5>
                                    <?php if ($participante['dt_fecha']=="11 y 12 de noviembre"){ ?> 
                                       <p>Fecha: <strong>11 de noviembre</strong></p><br>
                                       <?php } elseif($participante['dt_fecha']=="17 y 18 de noviembre"){ ?> 
                                       <p>Fecha: <strong>17 de noviembre</strong></p><br>  
                                        <?php } elseif($participante['dt_fecha']=="19 y 20 de noviembre"){ ?> 
                                       <p>Fecha: <strong>19 de noviembre</strong></p><br>  
                                        <?php } elseif($participante['dt_fecha']=="23 y 24 de noviembre"){ ?> 
                                       <p>Fecha: <strong>23 de noviembre</strong></p><br>  
                                        <?php } elseif($participante['dt_fecha']=="26 y 27 de noviembre"){ ?> 
                                       <p>Fecha: <strong>26 de noviembre</strong></p><br>  
                                        <?php } ?> 
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                      <thead>
                                          <tr>  
                                                <th>HORARIO</th>
                                                <th>ACTIVIDAD</th>
                                          </tr>
                                      </thead>
                                            <tbody>
                                              <tr>                  
                                                <td>09:30 – 10:00</td>
                                                <td><strong>Inauguración del Foro</strong></td>
                                              </tr>
                                              <tr>                  
                                                <td>10:00 – 10:20</td>
                                                <td> Presentación del propósito y dinámica de trabajo</td>
                                              </tr> 
                                              <?php
                                               $counter = 1;

                                              while($reg = $registro_dia1->fetch_assoc())
                                              {
                                              ?>                                              
                                              <tr>                  
                                                <td><?php echo $reg['dt_horario_inicio']." - ".$reg['dt_horario_fin']; ?></td>
                                                <td><?php echo $reg['mesa']; ?><br>Tipo de participación: <strong><?php echo $reg['dt_tipo_asistente']; ?></strong>
                                                  <?php if ($reg['dt_tipo_asistente']=="expositor") { ?>
                                                    <p>En breve nos comunicaremos contigo para explicarte más acerca de la dinámica de trabajo.</p>
                                                  <?php } ?>
                                                </td>
                                              </tr> 
                                              <?php
                                                }

                                              ?>  
                                              <tr>                  
                                                <td>17:00 – 19:00</td>
                                                <td><strong>Presentaciones</strong> simultáneas de buenas prácticas de vinculación de la región:</td>
                                              </tr>

                                            </tbody>         
                                    </table>
                                </div> 
                              </div>

                              <?php } elseif($participante['dt_participacion']=="dia2") {  ?>
                                <div class="row">
                                <div class="col-xl-12">
                                       <p><strong> HOLA <?php echo $participante['dt_nombre']; ?> ESTE ES TU PROGRAMA PARA LA REGIÓN <?php echo $participante['dt_nombre_region']; ?></strong></p>                       
                                </div>
                                <div class="col-xl-12">
                                    <h5>Día 2. Emprendimiento asociativo</h5>
                                     <?php if ($participante['dt_fecha']=="11 y 12 de noviembre"){ ?> 
                                       <p>Fecha: <strong>12 de noviembre</strong></p>
                                       <?php } elseif($participante['dt_fecha']=="17 y 18 de noviembre"){ ?> 
                                       <p>Fecha: <strong>18 de noviembre</strong></p>  
                                        <?php } elseif($participante['dt_fecha']=="19 y 20 de noviembre"){ ?> 
                                       <p>Fecha: <strong>20 de noviembre</strong></p>
                                        <?php } elseif($participante['dt_fecha']=="23 y 24 de noviembre"){ ?> 
                                       <p>Fecha: <strong>24 de noviembre</strong></p>
                                        <?php } elseif($participante['dt_fecha']=="26 y 27 de noviembre"){ ?> 
                                       <p>Fecha: <strong>27 de noviembre</strong></p> 
                                  <?php } ?>
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                      <thead>
                                          <tr>  
                                                <th>HORARIO</th>
                                                <th>ACTIVIDAD</th>
                                          </tr>
                                      </thead>
                                            <tbody>
                                              <tr>                  
                                                <td>09:30 – 10:00</td>
                                                <td><strong>Bienvenida al segundo día </strong></td>
                                              </tr>
                                              <tr>                  
                                                <td>10:00 – 10:20</td>
                                                 <td>Presentación del propósito y dinámica de trabajo</td>
                                              </tr>  
                                              <?php
                                               $counter = 1;

                                              while($reg2 = $registro_dia2->fetch_assoc())
                                              {
                                              ?>                                              
                                              <tr>                  
                                                <td><?php echo $reg2['dt_horario_inicio']." - ".$reg2['dt_horario_fin']; ?></td>
                                                <td>
                                                  <?php echo $reg2['mesa']; ?>
                                                  <br>Tipo de participación: <strong><?php echo $reg2['dt_tipo_asistente']; ?></strong>
                                                  <?php if ($reg2['dt_tipo_asistente']=="expositor") { ?>
                                                    <p>En breve nos comunicaremos contigo para explicarte más acerca de la dinámica de trabajo.</p>
                                                  <?php } ?>
                                                </td>
                                              </tr> 
                                              <?php
                                                }

                                              ?>  
                                              <tr>                  
                                                <td>13:50 – 15:00</td>
                                                <td>Conclusiones del Foro</td>
                                              </tr>

                                            </tbody>         
                                    </table>  
                                  </div> 
                                  </div>                            
                                <?php } elseif($participante['dt_participacion']=="ambos") {  ?>
                                <div class="row">
                                <div class="col-xl-12">
                                       <p><strong> HOLA <?php echo $participante['dt_nombre']; ?> ESTE ES TU PROGRAMA PARA LA REGIÓN <?php echo $participante['dt_nombre_region']; ?></strong></p>                       
                                </div>
                                  <div class="col-xl-12">
                                    <h5>Día 1. Educación Dual</h5>
                                    <?php if ($participante['dt_fecha']=="11 y 12 de noviembre"){ ?> 
                                       <p>Fecha: <strong>11 de noviembre</strong></p><br>
                                       <?php } elseif($participante['dt_fecha']=="17 y 18 de noviembre"){ ?> 
                                       <p>Fecha: <strong>17 de noviembre</strong></p><br>  
                                        <?php } elseif($participante['dt_fecha']=="19 y 20 de noviembre"){ ?> 
                                       <p>Fecha: <strong>19 de noviembre</strong></p><br>  
                                        <?php } elseif($participante['dt_fecha']=="23 y 24 de noviembre"){ ?> 
                                       <p>Fecha: <strong>23 de noviembre</strong></p><br>  
                                        <?php } elseif($participante['dt_fecha']=="26 y 27 de noviembre"){ ?> 
                                       <p>Fecha: <strong>26 de noviembre</strong></p><br>  
                                        <?php } ?> 
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                      <thead>
                                          <tr>  
                                                <th>HORARIO</th>
                                                <th>ACTIVIDAD</th>
                                          </tr>
                                      </thead>
                                            <tbody>
                                              <tr>                  
                                                <td>09:30 – 10:00</td>
                                                <td><strong>Inauguración del Foro</strong></td>
                                              </tr>
                                              <tr>                  
                                                <td>10:00 – 10:20</td>
                                                <td> Presentación del propósito y dinámica de trabajo</td>
                                              </tr> 
                                              <?php
                                               $counter = 1;

                                              while($regambos1 = $registro_dia1_ambos->fetch_assoc())
                                              {
                                              ?>                                              
                                              <tr>                  
                                               <td><?php echo $regambos1['dt_horario_inicio']." - ".$regambos1['dt_horario_fin']; ?></td>
                                                <td><?php echo $regambos1['mesa']; ?><br>Tipo de participación: <strong><?php echo $regambos1['dt_tipo_asistente']; ?></strong>
                                                  <?php if ($regambos1['dt_tipo_asistente']=="expositor") { ?>
                                                    <p> En breve nos comunicaremos contigo para explicarte más acerca de la dinámica de trabajo.</p>
                                                  <?php } ?>
                                                </td>
                                              </tr> 
                                              <?php
                                                }

                                              ?>  
                                              <tr>                  
                                                <td>17:00 – 19:00</td>
                                                <td><strong>Presentaciones</strong> simultáneas de buenas prácticas de vinculación de la región:</td>
                                              </tr>

                                            </tbody>         
                                    </table>
                                </div> 
                                </div>
                                <div class="row"><!--row-->
                                <div class="col-xl-12">
                                    <h5>Día 2. Emprendimiento asociativo</h5>
                                    <?php if ($participante['dt_fecha']=="11 y 12 de noviembre"){ ?> 
                                       <p>Fecha: <strong>12 de noviembre</strong></p>
                                       <?php } elseif($participante['dt_fecha']=="17 y 18 de noviembre"){ ?> 
                                       <p>Fecha: <strong>18 de noviembre</strong></p>  
                                        <?php } elseif($participante['dt_fecha']=="19 y 20 de noviembre"){ ?> 
                                       <p>Fecha: <strong>20 de noviembre</strong></p>
                                        <?php } elseif($participante['dt_fecha']=="23 y 24 de noviembre"){ ?> 
                                       <p>Fecha: <strong>24 de noviembre</strong></p>
                                        <?php } elseif($participante['dt_fecha']=="26 y 27 de noviembre"){ ?> 
                                       <p>Fecha: <strong>27 de noviembre</strong></p> 
                                  <?php } ?>
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                      <thead>
                                          <tr>  
                                                <th>HORARIO</th>
                                                <th>ACTIVIDAD</th>
                                          </tr>
                                      </thead>
                                            <tbody>
                                              <tr>                  
                                                <td>09:30 – 10:00</td>
                                                <td><strong>Bienvenida al segundo día </strong></td>
                                              </tr>
                                              <tr>                  
                                                <td>10:00 – 10:20</td>
                                                 <td>Presentación del propósito y dinámica de trabajo</td>
                                              </tr>  
                                              <?php
                                               $counter = 1;

                                              while($regambos2 = $registro_dia2_ambos->fetch_assoc())
                                              {
                                              ?>                                              
                                              <tr>                  
                                                <td><?php echo $regambos2['dt_horario_inicio']." - ".$regambos2['dt_horario_fin']; ?></td>
                                                <td><?php echo $regambos2['mesa']; ?><br>Tipo de participación: <strong><?php echo $regambos2['dt_tipo_asistente']; ?></strong>
                                                  <?php if ($regambos2['dt_tipo_asistente']=="expositor") { ?>
                                                    <p>En breve nos comunicaremos contigo para explicarte más acerca de la dinámica de trabajo.</p>
                                                  <?php } ?>
                                                </td>
                                              </tr> 
                                              <?php
                                                }

                                              ?>  
                                              <tr>                  
                                                <td>13:50 – 15:00</td>
                                                <td>Conclusiones del Foro</td>
                                              </tr>

                                            </tbody>         
                                    </table>  
                                  </div> 
                                  </div> 
                              <?php } else {  ?>
                              <?php } ?>
                              </div>
                           </div><!--row-->
                        </div>
                     </div>
                  </div>
                  <!-- Checkout Wrap -->
               </div>
            </div>
         </section>

        <?php } ?>





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
      <script type="text/javascript">
         $(document).ready(function() {
             $('#dia2').multiselect();
         });
      </script>
      <script type="text/javascript">
         $(document).ready(function(){
           $("#region").change(function () {          
             $("#region option:selected").each(function () {
               id_cat_region = $(this).val();
               $.post("includes/getDia.php", { id_cat_region: id_cat_region }, function(data){
                 $("#dia").html(data);
               });            
             });
           })
         });      
      </script>
      <script language="javascript">
         $(document).ready(function(){
           $("#region").change(function () {          
             $("#region option:selected").each(function () {
               id_cat_region = $(this).val();
               $.post("includes/getRegion.php", { id_cat_region: id_cat_region }, function(data){
                 $("#entidad").html(data);
               });            
             });
           })
         });      
      </script>
      <script language="javascript">
         $(document).ready(function(){
           $("#entidad").change(function () {          
             $("#entidad option:selected").each(function () {
               id_cat_entidad = $(this).val();
               $.post("includes/getIes.php", { id_cat_entidad: id_cat_entidad }, function(data){
                 $("#ies").html(data);
               });            
             });
           })
         });      
      </script>
      <script language="javascript">
         $(document).ready(function() {
         $("input[type=radio]").click(function(event){
             var valor = $(event.target).val();
             if(valor =="empresa"){
                 $("#div1").show();
                 $("#div2").hide();
             } else if (valor == "ies") {
                 $("#div1").hide();
                 $("#div2").show();
             } else { 
                 // Otra cosa
             }
         });
         })
      </script>

      <script language="Javascript">
  function imprSelec(nombre) {
    var ficha = document.getElementById(nombre);
    var ventimp = window.open(' ', 'popimpr');
    ventimp.document.write( ficha.innerHTML );
    ventimp.document.close();
    ventimp.print( );
    ventimp.close();
  }
  </script>
   </body>
</html>