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
          <header class="stick style1 w-100">
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
            <div class="checkout-form w-100">              
            </div>
         </section>
         <section>
            <div class="w-100 pt-140 pb-120 position-relative">
               <div class="container">
                <div class="col-md-12 col-sm-12 col-lg-12">
                           <div class="checkout-form w-100">   
                              <h5>Hola, tu registro se realizó con éxito </h5>
                              
                          </div><br><br><br>
                </div>
                  <div class="checkout-wrap w-100">
                    <?php if($Total1['total']>0) { ?>
                     <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">                           
                        </div>
                         
                         <div class="col-xl-12">
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
                                                <td><?php echo $reg['dt_nombre']; ?></td>
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
                                    <h5>Dia 2. Emprendimiento Asociativo y Educación Dual</h5>
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
                                                <td><?php echo $reg2['dt_nombre']; ?></td>
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
                                                <td><?php echo $regambos['dt_nombre']; ?></td>
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
                </div>
              </section>
            </section>

                             
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