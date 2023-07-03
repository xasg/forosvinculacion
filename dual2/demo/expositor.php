<?php 
   session_start();  
   include_once('databases_usuario.php');  
   mysqli_set_charset( $mysqli, 'utf8');
   $id=$_SESSION["id"]; 
   $asistencia = run_expositor();
   ?>
<!DOCTYPE html>
<html lang="es">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Expositores</title>
      <link href="boot/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/all.min.css">
      <link rel="stylesheet" href="assets/css/flaticon.css">
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
      <link rel="stylesheet" href="assets/css/jquery.bootstrap-touchspin.min.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/responsive.css">
      <link rel="stylesheet" href="assets/css/color.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/jquery.dataTables.css">
   </head>
   <body>
     <?php include("modal_expositor.php");?>

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
  <div class="row"><br><br><br></div><br><br><br>



     <div class="col-md-12">
                                    <ul class="nav nav-tabs">
                                       <li class="nav-item">
                                        <a class="nav-link" href="report_resumen.php">Resumen</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="report.php">Registros</a>
                                      </li>
                                       <li class="nav-item">
                                        <a class="nav-link " href="asistencia.php">Asistencia general</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link active" href="expositor.php">Expositor</a>
                                      </li>
                                  </ul><br><br>
              </div>
    <div class="col-md-12">
      <table id="example" class="table table-responsive table-striped table-bordered" style="width:100%">
        <thead>
            <tr>  
               <!-- <th>id</th>-->                
                <th>Región</th>
                <th>Entidad</th>
                <th>Ornanización</th>
                <th>Cargo</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Tel. Institucional</th>  
                <th>Movil</th> 
                <th>Mesa</th>
                <th>Estatus</th>
                <!--<th></th>
                <th>Participación</th>-->
            </tr>
        </thead>
              <tbody>
                <?php
                                             $counter = 1;

                                              while($asis = $asistencia->fetch_assoc())
                                              {
                                              ?>                                              
                                              <tr>  
                                               <!-- <td><?php// echo $asis['id_usuario']; ?></td>-->
                                                <td><?php echo $asis['dt_nombre_region']; ?></td>
                                                <td><?php echo $asis['nombre_entidad']; ?></td> 
                                                 <td>
                                                   <?php if($asis['dt_nom_org']==NULL) 
                                                            { 
                                                          echo $asis['dt_nom_org2']; 
                                                            } else { 
                                                             echo $asis['dt_nom_org']; 
                                                        } ?>   
                                                 </td>
                                                <td> 
                                                  <?php if($asis['dt_cargo']==NULL or $asis['dt_cargo']=='otro') 
                                                            { 
                                                             
                                                            } 
                                                            else { 
                                                               echo strtoupper($asis['dt_cargo']); 
                                                                 } 
                                                  ?>
                                                  <?php if($asis['dt_cargo2']==NULL or $asis['dt_cargo2']=='otro') 
                                                            { 
                                                             
                                                            } 
                                                            else { 
                                                               echo strtoupper($asis['dt_cargo2']); 
                                                                 } 
                                                  ?> 
                                                  <?php if($asis['dt_otro_cargo']!=NULL) 
                                                            { 
                                                          echo strtoupper($asis['dt_otro_cargo']); 
                                                            } else { 
                                                            
                                                  } ?>

                                                </td>                       
                                                <td><?php echo $asis['nombre']." ".$asis['paterno']." ".$asis['materno']; ?></td>
                                                 <td><?php echo strtoupper($asis['dt_email']); ?></td>
                                                 <td><?php echo strtoupper($asis['telefono']); ?></td>
                                                 <td><?php echo strtoupper($asis['celular']); ?></td>                       
                                                 <td>


                                                   <?php if($asis['mesa']=="Tema 1. Finalidad y orientaciones<br>Tema 4. Aspectos de vinculación<br>Tema 6. Alcances y retos") { ?>
                                                            <p>GRUPO 1</p>

                                                         <?php } elseif ($asis['mesa']=="Tema 2. Definición y elementos esenciales<br>Tema 5. Figuras y procesos operativos<br>Tema 7: Seguimiento y evaluación") {  ?>
                                                             <p>GRUPO 2</p>
                                                        <?php } elseif ($asis['mesa']=="Tema 3. Aspectos académicos") {  ?>
                                                             <p>GRUPO 3</p>
                                                        <?php } else { 
                                                            echo $asis['mesa'];
                                                          } ?> 


                                                  </td>
                                                   <td class="text-center">

                                              <?php if($asis['tp_estatus']==1 ) { ?>

                                                <h6>Validado</h6>

                                              <?php } else { ?>

                                                <a src="" data-toggle="modal" data-target="#estatus" data-nombre="<?php echo $asis['nombre']." ".$asis['paterno']." ".$asis['materno']; ?>" data-id="<?php echo $asis['id_asistencia']; ?>"><h6 style="color: red;">Validar</h6></a> 
                                               <?php } ?>  

                                                <!--

                                                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#estatus" data-nombre="<?php// echo $asis['nombre']." ".$asis['paterno']." ".$asis['materno']; ?>" data-id="<?php// echo $asis['id_usuario']; ?>"><i class='glyphicon glyphicon-upload'></i>&nbsp;&nbsp;&nbsp;&nbsp;subir&nbsp;&nbsp;&nbsp;&nbsp;</button> -->


                                                </td> 
                                                 <!--<td class="text-center"><?php //echo strtoupper($asis['tipo']); ?></td>
                                                 <td class="text-center"><?php //echo strtoupper($asis['dt_participacion']); ?></td>-->
                                              </tr> 

                                              <?php
                                                }

                                              ?>  
              </tbody>
              <tfoot>
            <tr>
                <!--<th>id</th>-->
                <th>Región</th>
                <th>Entidad</th>
                <th>Ornanización</th>
                <th>Cargo</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Tel. Institucional</th>  
                <th>Movil</th> 
                <th>Mesa</th>
                <th></th>
                <!--<th></th>
                <th>Participación</th>-->
            </tr>
        </tfoot>         
      </table>
    </div>
  </div> 
         </div>
      </section>







      <script type="text/javascript" src="assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/jquery.dataTables.min.js"></script>
      <script src="boot/js/app.js"></script>
      <script>
  $(document).ready(function() {
    $('#example').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );
</script>

</body>
</html>