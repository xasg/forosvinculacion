<?php 
session_start();

include_once('databases_usuario.php');
//$id = $_SESSION["id"];
//$region = $_SESSION["region"];
//mysqli_set_charset( $mysqli, 'utf8');
//$participante = run_participante($id, $region);

$correo = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$region = isset($_SESSION['region']) ? $_SESSION['region'] : '';





/*****************************************/
// esta funcion se usa para poder cambiar el valor de status_contancia a 1, esto indica que ya genero su constancia 
 
 
if ( $region==01) 
{
	$cede = 'SUR - SURESTE' ;
}
elseif ($region==02) 
{
	$cede = 'CENTRO SUR' ;
}
elseif ($region==03) 
{
	$cede = 'CENTRO - OCCIDENTE' ;
}
elseif ($region==04) 
{
	$cede = 'NORESTE' ;
}
elseif ($region==05) 
{
	$cede = 'NOROESTE' ;
}
elseif ($region==06) 
{
	$cede = 'METROPOLITANA' ;
}



?>


<!DOCTYPE html>
<html lang="es">
<!-- Un comentario perron que no comenta nada-->
<head>
    <title>Mensaje &raquo; </title>
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
      function conMayusculas(field) 
      {
         field.value = field.value.toUpperCase()
      }   
   </script>
   <script language="JavaScript">
        document.getElementById("enviarCorreo").addEventListener("click", function() {
        var asunto = "Constancia no Generada";
        var cuerpoCorreo = "Este es el texto que se incluirá en el correo.";
        // Forma el enlace de correo electrónico con el asunto y el cuerpo
        var enlaceCorreo = "mailto:forosdevinculacion@fese.mx?subject=" + encodeURIComponent(asunto) + "&body=" + encodeURIComponent(cuerpoCorreo);
        // Abre el cliente de correo electrónico predeterminado
        //window.location.href = enlaceCorreo;
        });
</script>
   <style>
        body
        {
            font-family: 'Montserrat', sans-serif;
        }

        .sangria
        {    
            margin-right: 1em;
            color :white;
        }
        .paddingTop
        {    
            padding-top: 15px;
            
        }
        .paddingBottom
        {              
            padding-bottom: 15px;
        }
        /* Estilos para centrar el botón en el centro de la pantalla */
        .centrar-botones 
        {
            display: flex;
            justify-content: center;
            align-items: center;
            
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
                            <a class="nav-link " href="../index.html">
                                INICIO
                            </a>
                        </li>
                        <!--<li class="nav-item active">
                            <a class="nav-link" href="../agenda.php">
                                AGENDA
                            </a>
                        </li>-->
                        <!--<li class="nav-item active">
                            <a class="nav-link" href="constancia.html">
                               DESCARGAR CONSTANCIA
                            </a>
                        </li>-->

                       
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
            
         <div class="container-fluid" style="padding-top: 3%">
            <div class="row justify-content-center ">
              <div class="col-md-10 ">
                    <!-- <img class="img-fluid" src="img/agenda.png" width="100%"  style="margin-top: 4%;"> -->
                    <!-- -----------------------------------------------------------------------------se agrego validacion por region en la agenda paramostrar sus agendas por región -->
                        <h2 class="table-light text-center" style="font-size: 32px !important; padding: 15px !important;">No hemos encontrado información relacionada a su correo electrónico.  </h2>
                        <strong><h2 class="table-light text-center" style="font-size: 32px !important; padding: 15px !important; color: #8D203D;"><?php echo  $correo   ?>  </h2></strong>
                        <h2 class="table-light text-center" style="font-size: 32px !important; padding: 15px !important;">En la región </h2>
                        <strong><h2 class="table-light text-center" style="font-size: 32px !important; padding: 15px !important; color: #8D203D;"><?php echo  $cede   ?>  </h2></strong>
                        <!--<h2 class="table-light text-center" style="font-size: 32px !important; padding: 15px !important;">Para brindarle la mejor atención posible, le pedimos se ponga en contacto con nuestro equipo. </h2>-->
                        <h2 class="table-light text-center" style="font-size: 32px !important; padding: 15px !important;">Le pedimos se contacte con nosotros por correo, dando clic en el siguiente botón: </h2>
                        <br>
                        
                        
                        <div class="col-md-12 centrar-botones ">
                            <a href="mailto:forosdevinculacion@fese.mx?subject=Constancia%20no%20generada
                                &body=Para%20acelerar%20el%20proceso,%20favor%20de%20compartirnos%20la%20siguiente%20información:%0A%0A
                                •  Nombre completo %0A
                                •  Correo electrónico%0A
                                •  Institución de Educación Superior%0A
                                •  Región del evento al que asistió%0A%0A">                            
                                <button class="btn btn-primary btn-lg" type="submit">Mandar correo</button>
                        </a>

                        </div>
    


                        <!--<h4 class="table-light text-center" > Para acelerar el proceso, favor de compartirnos la siguiente información: </h4>
                        <br>
                        <lu>
                           <li>Nombre completo</li>
                           <li>Correo electrónico</li>
                           <li>Institución de Educación Superior</li>
                           <li>Región del evento al que asistió</li>
                           <?php /*echo "vamos a ver si esto jala " . $correo   */?>
                        
                        </lu>-->
                        <br><br>

                        <!--<div class="col-md-12 text-center" >
                           <a href="https://wa.me/525551012306" target="_blank" class="contact-link sangria">
                              <img src="img/whatsApp.png" alt="WhatsApp" width="40" height="40" title = "Mandar un mensaje por WhatsApp ">                           
                           </a>  <strong class = "sangria"> 55 5101 2306 </strong>                            -->
                            
                        
                           <!--<a href="mailto:forosdevinculacion@fese.mx? Subject= Constancia%20no%20Generada" class = "sangria" >
                              <img src="img/email.png" alt="Correo" width="40" height="40" title = "Mandar Correo electrónico " >                           
                           </a>  <strong class = "sangria"> forosdevinculacion@fese.mx  </strong>-->

                            <!--<a href= "mailto:forosdevinculacion@fese.mx?subject= Constancia%20no%20generada" &body=" el mensaje estandar">
                                <img src="img/email.png" alt="Correo" width="40" height="40" title="Mandar Correo electrónico">
                                <strong class="sangria">forosdevinculacion@fese.mx</strong>
                            </a>-->

                            <!--<a href="mailto:forosdevinculacion@fese.mx?subject=Constancia%20no%20generada
                            &body=Para%20acelerar%20el%20proceso,%20favor%20de%20compartirnos%20la%20siguiente%20información:%0A%0A
                            •  Nombre completo %0A
                            •  Correo electrónico%0A
                            •  Institución de Educación Superior%0A
                            •  Región del evento al que asistió%0A%0A">Contacta conmigo por email</a>                        -->

                          <!-- <a href="tel:+5554204900,,2073"    class="contact-link  sangria">
                              <img src="img/telefono.png" alt="Llamada telefónica" width="40" height="40" title = "Marcar al numero telefónico">
                           </a> <strong>55 5420 4900 Ext. 2073 </strong>
                        </div>-->

                        
                        
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
    
    <!--<footer style="background-color: #8D203D;" id="contacto">
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
                        <br>

                       
                    </div>
                    


                </div>
            </div>
        </div>
    </footer>--><!-- Footer -->



    <!------------------------------------------------------------------------------------------------------->
    <footer style="background-color: #8D203D;" id="contacto" class = "position-relative paddingBottom">
        <div class="col-md-12 text-center  paddingTop container" >
            <div class="footer-inner d-inline-block paddingTop row ">                        
                
                <a href="https://wa.me/525551012306" target="_blank" class="contact-link sangria ">
                    <img src="../img/whatsapp.png" alt="WhatsApp" width="40" height="40" title = "Mandar un mensaje por WhatsApp ">                           
                      
                </a><strong class = "sangria"> 55 5101 2306 </strong>     
                
                <a href="mailto:forosdevinculacion@fese" class = "sangria" >
                    <img src="../img/correo.png" alt="Correo" width="40" height="40" title = "Mandar Correo electrónico " >                           
                </a>  <strong class = "sangria"> forosdevinculacion@fese.mx  </strong>
                                  
                <a href="tel:+5554204900,,2073"    class="contact-link sangria">
                <img src="../img/llamada.png" alt="Llamada telefónica" width="40" height="40" title = "Marcar al numero telefónico">
                </a> <strong class = "sangria ">55 5420 4900 Ext. 2073 </strong>
                
            </div>
            <div class="logo  ">
                <h1 class="mb-0">
                    <a href="index.html" title=""><br>
                        <img class="img-fluid " src="img/logo.png" alt="Logo" width="10%">
                    </a>
                    <p></p>
                </h1>
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