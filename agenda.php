<?php
// Validación que recibe por get el tab seleccionado para mostrar la región seleccionada
$var_reg = 1;
if(isset($_GET['region'])){
   $var_reg=$_GET['region'];
 }
?>
<!DOCTYPE html>
<html lang="es">
<!-- Un comentario perron que no comenta nada-->
<head>
    <title>Agenda &raquo; </title>
    <meta charset="UTF-8">
    <meta name="language" content="es-MX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png" sizes="35x35" type="image/png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style-stands.css">
    <link rel="stylesheet" href="css/animation.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style_navs.css">
    <script src="js/jquery.js"></script>
    <script src="js/scrollbooster.min.js"></script>
   <link rel="stylesheet" href="css/agenda.css">
    <script language="JavaScript">
        function conMayusculas(field) {
            field.value = field.value.toUpperCase()
        }   
    </script>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>

</head>

<body class="page-template page-template-auditorio page-template-auditorio-php page page-id-304">
    <!-- Menu de navegación -->
    <div class="container-fluid mx-0 px-0" style="background-color: #8D203D;">
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg navigation">
                <img alt="Responsive image" class="img-fluid" src="img/logo.png" width="150">
                <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon"> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto navigation" style="width:0px;">
                        <li class="nav-item active">
                            <a class="nav-link " href="index.html">
                                INICIO
                            </a>
                        </li>
                        <!-- <li class="nav-item active">
                            <a class="nav-link" href="./registro.php">
                                PARTICIPACIÓN
                            </a>
                        </li> -->
                        <!--<li class="nav-item active activo">
                            <a class="nav-link" href="./agenda.html">
                                AGENDA
                            </a>
                        </li>-->
                        <li class="nav-item active">
                            <a class="nav-link" href="./contanciasForos2023/constancia.html">
                                CONSTANCIA
                            </a>
                        </li>


                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="w-100 pt-121  opc1 position-relative">
        <img class="img-fluid" src="img/cintillo_header.png" width="100%" style="margin-top: 2%;">
    </div>

    <div class="container-fluid px-0">
       <div class="container">
         <div class="row">
            <!-- ************************** TABS que indican la region seleccionada para mostrar la agenda respectiva -->
            <div class="col-md-12">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link <?php if($var_reg==1){echo 'active';}?>" href="agenda.php?region=1">SUR SURESTE </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php if($var_reg==2){echo 'active';}?>" href="agenda.php?region=2">CENTRO SUR </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php if($var_reg==3){echo 'active';}?>" href="agenda.php?region=3">CENTRO OCCIDENTE</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php if($var_reg==4){echo 'active';}?>" href="agenda.php?region=4">NORESTE</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php if($var_reg==5){echo 'active';}?>" href="agenda.php?region=5">NOROESTE </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php if($var_reg==6){echo 'active';}?>" href="agenda.php?region=6">METROPOLITANA </a>
                </li>
              </ul>
            </div>
         </div>
         <div class="container-fluid" style="padding-top: 3%">
            <div class="row justify-content-center ">
                <div class="col-md-10 ">
                    <!-- <img class="img-fluid" src="img/agenda.png" width="100%"  style="margin-top: 4%;"> -->
                    <!-- -----------------------------------------------------------------------------se agrego validacion por region en la agenda paramostrar sus agendas por región -->
                     <?php if ($var_reg == 1 || $var_reg == 2 || $var_reg == 3 || $var_reg == 4 || $var_reg == 5) {
                           switch ($var_reg) {
                              case 1:
                                 $nombre_region = 'SUR SURESTE';
                                 break;
                              case 2:
                                 $nombre_region = 'CENTRO SUR';
                                 break;
                              case 3:
                                 $nombre_region = 'CENTRO OCCIDENTE';
                                 break;
                              case 4:
                                 $nombre_region = 'NORESTE';
                                 break;
                              case 5:
                                 $nombre_region = 'NOROESTE';
                                 break;
                              
                              default:
                                 $nombre_region ="REGION";
                                 break;
                           }
                        ?>
                        <h2 class="table-light verde text-center" style="font-size: 32px !important; padding: 15px !important;">Agenda - Región <?= $nombre_region;?></h2>
                        <br>
                     <table class="table   table-borderless border align-middle text-center">
                        <thead class="table-light">      
                           <div class="card">
      
                                 <div class="card-body cafe text-center" >
            
                                    <h4 class="card-title">DÍA 1</h4>
            
                                    <h5 class="card-subtitle ">REUNIÓN VINCULADORES</h5>
            
                                 </div>
      
                           </div>
      
                           <tr class="text-justifyu" >
      
                              <th class="verde">HORARIO</th>
      
                              <th class="cafe-claro"><b>ACTIVIDAD</b></th>
      
                           </tr>
      
                        </thead>
      
                           <tbody class="table-group-divider">
      
                              <tr class="" >
      
                                 <td class="verde">16:00 - 18:00</td>
      
                                 <td class="text-left ">Reunión de responsables de vinculación de las IES</td>
      
                                 
      
                              </tr>
                              
                              <tr class="">
                                 
                                 <td class="verde">18:00</td>
                           
                                 <td class="text-left ">Actividad Integradora y cultural</td>
      
                                 
      
                              </tr>
      
                           </tbody>
                     </table>

                     <table class="table   table-borderless border align-middle text-center">

                        <thead class="table-light">
      
                           <caption></caption>
      
                           <div class="card">
      
                           <div class="card-body cafe text-center" >
      
                              <h4 class="card-title" >DÍA 2</h4>
      
                              <h5 class="card-subtitle">MESA DE EXPERTOS DE ALTO NIVEL(TITULARES DE IES)</h5>
      
                           </div>
      
                           </div>
      
                           <tr class="text-justifyu">
      
                              <th class="verde">HORARIO</th>
      
                              <th class="cafe-claro">ACTIVIDAD</th>
      
                           </tr>
      
                           </thead>
      
                           <tbody class="table-group-divider">
      
                              <tr class="" >
      
                                 <td class="verde">10:00 - 11:15</td>
      
                                 <td class="text-left">Bienvenida y mensajes de autoridades</td>
      
                                 
      
                              </tr>
      
                              <tr class="">
      
                                 <td class="verde">11:15 - 11:30</td>
      
                                 <td class="text-left cafe-claro-size">Fotografía oficial</td>
      
                              </tr>
      
                              <tr class="">
      
                                 <td class="verde">11:30 - 13:00</td>
      
                                 <td class="text-left">Emprendimiento asociativo (ESS)</td>
      
                              </tr>
      
                              <tr class="">
      
                                 <td class="verde">13:00 - 15:00</td>
      
                                 <td class="text-left cafe-claro-size">Educación Dual</td>
      
                              </tr>
      
                              <tr class="">
      
                                 <td class="verde">15:00 - 16:00</td>
      
                                 <td class="text-left">Servicio Social</td>
      
                              </tr>
      
                              <tr class="">
      
                                 <td class="verde">17:00 - 19:00</td>
      
                                 <td class="text-left cafe-claro-size">Titulares de IES o alianzas</td>
      
                              </tr>
      
                           </tbody>
      
                           <tfoot>
      
                           
      
                           </tfoot>
      
                     </table>
                     
                     <?php }elseif ($var_reg == 6) {?> <!--*************************************************VALIDACIÓN PARA LA AGENDA DE REGION METROPOLITANA QUE CAMBIA EN ESTA REGIÓN-->
                        <h2 class="table-light verde text-center" style="font-size: 32px !important; padding: 15px !important;">Agenda - Región METROPOLITANA</h2>
                     <br>
                     <table class="table   table-borderless border align-middle text-center">

                        <thead class="table-light">
      
                           <caption></caption>
      
                           <div class="card">
      
                           <div class="card-body cafe text-center" >
      
                              <h4 class="card-title">DÍA 1</h4>
      
                              <h5 class="card-subtitle ">REUNIÓN DE RESPONSABLES DE VINCULACIÓN Y ACTIVIDAD CULTURAL</h5>
      
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
      
                     </table>
                     <table class="table   table-borderless border align-middle text-center">

                        <thead class="table-light">
      
                           <caption></caption>
      
                           <div class="card">
      
                           <div class="card-body cafe text-center" >
      
                              <h4 class="card-title" >DÍA 2</h4>
      
                              <h5 class="card-subtitle">MESA DE EXPERTOS DE ALTO NIVEL(TITULARES DE IES)</h5>
      
                           </div>
      
                           </div>
      
                           <tr class="text-justifyu">
      
                              <th class="verde">HORARIO</th>
      
                              <th class="cafe-claro">ACTIVIDAD</th>
      
                           </tr>
      
                           </thead>
      
                           <tbody class="table-group-divider">
      
                              <tr class="" >
      
                                 <td class="verde">10:00 - 10:50</td>
      
                                 <td class="text-left">Bienvenida y mensajes de autoridades</td>
      
                                 
      
                              </tr>
      
                              <tr class="">
      
                                 <td class="verde">10:50 - 11:00</td>
      
                                 <td class="text-left cafe-claro-size">Fotografía oficial</td>
      
                              </tr>
      
                              <tr class="">
      
                                 <td class="verde">11:00 - 12:20</td>
      
                                 <td class="text-left">Emprendimiento asociativo (ESS)</td>
      
                              </tr>
      
                              <tr class="">
      
                                 <td class="verde">12:20 - 14:00</td>
      
                                 <td class="text-left cafe-claro-size">Educación Dual</td>
      
                              </tr>
      
                              <tr class="">
      
                                 <td class="verde">14:00 - 14:30</td>
      
                                 <td class="text-left">Servicio Social</td>
      
                              </tr>
      
                              <tr class="">
      
                                 <td class="verde">14:30 - 15:30</td>
      
                                 <td class="text-left cafe-claro-size">CLAUSURA GENERAL</td>
      
                              </tr>
      
                           </tbody>
      
                           <tfoot>
      
                           
      
                           </tfoot>
      
                     </table>
      
                     <?php }?>
                     
                     
                
                </div>
            </div>
        </div>
      </div>
        
        <!-- Cintillo divisor -->
        <div class="w-100 pt-121  opc1 position-relative">
            <img class="img-fluid" src="img/cintillo_divisor.png" width="100%"
                style="margin-top: 5%;margin-bottom: 2%;">
        </div>
        <!-- Parte inferior de página -->
    </div>
    
    <!-- Imagen greco de cabecera -->
    
    <footer style="background-color: #8D203D;" id="contacto">
        <div class="w-100 pt-121  opc1 position-relative">
            <div class="container position-relative">
                <div class="footer-wrap w-100 text-center">
                    <div class="footer-inner d-inline-block">
                        <div class="logo d-inline-block">
                            <h1 class="mb-0">
                                <a href="index.html" title=""><br>
                                    <img class="img-fluid" src="img/logo.png" alt="Logo" width="30%">
                                </a>
                            </h1>
                        </div>
                        <p class="mb-0" style="color: #fff">Contacto: forosdevinculacion@fese.mx</p><br>
                    </div>

                </div>
            </div>
        </div>
    </footer><!-- Footer -->


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/chai.js"></script>
    <script src="js/wp-embed.min.js"></script>
</body>

</html>