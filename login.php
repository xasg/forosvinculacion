<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<!-- Un comentario perron que no comenta nada-->
<head>
    <title>Login &raquo; </title>
    <meta charset="UTF-8">
    <meta name="language" content="es-MX">
    <link rel="icon" href="assets/images/favicon.png" sizes="35x35" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style-stands.css">
    <link rel="stylesheet" href="css/animation.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style_navs.css">
    <script src="js/jquery.js"></script>
    <script src="js/scrollbooster.min.js"></script>
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

    <?php 
    // ---->>Se cambio la funcion por la validacion por post en el mismo formulario para redireccionar o indicar al usuario que es incorrecta las credenciales o son correctas
        // function  procesarFormulario($correo, $contraseña)  // validamos que el usuario exista 
        // {
          if (isset($_POST['dtcorreo']) && isset($_POST['dtpassword']))
              {
            $correo = $_POST['dtcorreo'] ;
            $contraseña = $_POST['dtpassword'];

            require_once('controller/conexion.php');
            //session_start();
            $sql = "SELECT * FROM encargado WHERE dt_email = '$correo' AND dt_password = '$contraseña'";
		    $result = $mysqli->query($sql);
            if ($result->num_rows > 0) 
		    {			
			    // Obtener la primera fila de resultados
			    $row = $result->fetch_assoc();
			    // Guardar el valor de la columna "tp_usuario" en la variable $tipoUsuario
			    $tipoUsuario = $row["tp_usuario"];
                $nombre = $row['dt_nombre'];
			    //echo "existe el usuario y es del tipo ". $tipoUsuario;
			    // if($tipoUsuario == 2)  // solo los usuarios del tipo 2 pueden acceder al reporte 
			    // {
				//     echo "<script language='javascript'>
				// 	window.location.replace('report.php');
				//     </script>";
			    // }
			    // else
			    // {   
				//     header('location:login.php?error=empty-password-invalid'); //si el usuario no es del tipo 2, se muestra un mensaje de error 
			    // }

                switch ($tipoUsuario) {
                    case 0:
                        // La validacion para los encargados de "VALIDAR a los aceptados o rechazados"
                        echo "<script language='javascript'>
                        	window.location.replace('report.php');
                            </script>";
                            $_SESSION['tp_user'] = 2;
                            $_SESSION['dt_email'] = $correo;
                            $_SESSION['dt_password'] = $contraseña;
                            $_SESSION['dt_nombre'] = $nombre;
                        break;
                    case 3:
                        // La validacion para los encargados de "VALIDAR a los aceptados o rechazados" SUR SURESTE
                        echo "<script language='javascript'>
                        	window.location.replace('report.php');
                            </script>";
                            $_SESSION['tp_user'] = 3;
                            $_SESSION['dt_email'] = $correo;
                            $_SESSION['dt_password'] = $contraseña;
                            $_SESSION['dt_nombre'] = $nombre;
                        break;
                    case 4:
                        // La validacion para los encargados de "VALIDAR a los aceptados o rechazados" CENTRO SUR
                        echo "<script language='javascript'>
                        	window.location.replace('report.php');
                            </script>";
                            $_SESSION['tp_user'] = 4;
                            $_SESSION['dt_email'] = $correo;
                            $_SESSION['dt_password'] = $contraseña;
                            $_SESSION['dt_nombre'] = $nombre;
                        break;
                    case 5:
                        // La validacion para los encargados de "VALIDAR a los aceptados o rechazados" CENTRO OCCIDENTE
                        echo "<script language='javascript'>
                        	window.location.replace('report.php');
                            </script>";
                            $_SESSION['tp_user'] = 5;
                            $_SESSION['dt_email'] = $correo;
                            $_SESSION['dt_password'] = $contraseña;
                            $_SESSION['dt_nombre'] = $nombre;
                        break;
                    case 6:
                        // La validacion para los encargados de "VALIDAR a los aceptados o rechazados" NORESTE
                        echo "<script language='javascript'>
                        	window.location.replace('report.php');
                            </script>";
                            $_SESSION['tp_user'] = 6;
                            $_SESSION['dt_email'] = $correo;
                            $_SESSION['dt_password'] = $contraseña;
                            $_SESSION['dt_nombre'] = $nombre;
                        break;
                    case 7:
                        // La validacion para los encargados de "VALIDAR a los aceptados o rechazados" NOROESTE
                        echo "<script language='javascript'>
                        	window.location.replace('report.php');
                            </script>";
                            $_SESSION['tp_user'] = 7;
                            $_SESSION['dt_email'] = $correo;
                            $_SESSION['dt_password'] = $contraseña;
                            $_SESSION['dt_nombre'] = $nombre;
                        break;
                    case 8:
                        // La validacion para los encargados de "VALIDAR a los aceptados o rechazados" METROPOLITANA
                        echo "<script language='javascript'>
                        	window.location.replace('report.php');
                            </script>";
                            $_SESSION['tp_user'] = 8;
                            $_SESSION['dt_email'] = $correo;
                            $_SESSION['dt_password'] = $contraseña;
                            $_SESSION['dt_nombre'] = $nombre;
                        break;
                    
                    default:
                        # code...
                        header('location:login.php?error=empty-password-invalid'); //si el usuario no es del tipo 2, se muestra un mensaje de error 
                        break;
                }
		    } 
		    else 
		    {
			    // Usuario inválido, enviar respuesta al cliente.			
			    header('location:login.php?error=empty-password-invalid');
            }
        }
    ?>

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
                        <li class="nav-item active">
                            <a class="nav-link" href="./registro.php">
                                PARTICIPACIÓN
                            </a>
                        </li>
                        <li class="nav-item active active">
                            <a class="nav-link" href="./agenda.html">
                                AGENDA
                            </a>
                        </li>
                        <li class="nav-item activo">
                            <a class="nav-link" href="./login.php">
                                LOGIN
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
        <div class="container-fluid" style="padding-top: 3%">
            <div class="row justify-content-center ">
                <div class="col-md-12 ">  

                <!--------------------------------->
                <!-- <form action="databases_registro.php" method="POST"> ----------------------------------SE CREA EL LOGIN--------------------------- -->
                <form action="" method="POST"> <!------------------------------------SE CREA EL LOGIN----------------------------->
                    <?php /* <form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> */?>
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Hola, le damos la bienvenida de nuevo.<br><br></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 border">
                            <div class="col-md-12"><br>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control" name="dtcorreo"  placeholder="Ingresa tu email" onChange="conMayusculas(this)" required>
                                </div>                      
                            </div>
                        <div class="col-md-12">    
                            <div class="form-group">
                                <label for="exampleInputEmail1">Contraseña</label>
                                <input type="password" class="form-control" name="dtpassword"  placeholder="Ingresa tu contraseña" required>
                            </div>                      
                        </div>
                        <div class="col-md-12"> <br>
                            <button type="submit" class="btn btn-block btn-primary btn-lg">Ingresar</button><br><br>
                        </div>
                    <?php
                        // Si los datos no existen mostrara el siguiente mensaje
                        if (isset($_GET['error'])) 
                        {
                    ?>
                        <div class="alert alert-danger" role="alert">
                          Los datos de acceso que ingreso son incorrectos
                        </div>
                   <?php } ?>
                    
                   <?php/*
                        
                        // Verificamos si el formulario ha sido enviado
                        if ($_SERVER['REQUEST_METHOD'] === 'POST')  
                        {
                            // Procesar los datos del formulario llamando a la función
                            procesarFormulario($_POST['correo'], $_POST['password'],);
                        }
                    */?>


                     <div class="col-md-12 text-center">
                       
                     </div>
                      <div class="col-md-12"> 
                      
                     </div>

                     </div>
                     <div class="col-md-8">
                        <img src="img/avatars.png" class="img-fluid" alt="Responsive image"> 
                     </div>
                </div>  
 </form>
 <!----------------->
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
    <script type="text/javascript">
$(document).ready(function() {  
    $('#username').on('blur', function(){
        $('#result-username').html('<img src="../img/loader.gif" />').fadeOut(1000);

        var username = $(this).val();       
        var dataString = 'username='+username;

        $.ajax({
            type: "POST",
            url: "check_username_availablity.php",
            data: dataString,
            success: function(data) {
                $('#result-username').fadeIn(1000).html(data);
            }
        });
    });              
});    
</script>

</body>

</html>