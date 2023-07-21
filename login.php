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
                <form action="controller/login.php" method="POST">  <!------------------------------------SE CREA EL LOGIN----------------------------->
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
                                    <input type="text" class="form-control" name="correo"  placeholder="Ingresa tu email" onChange="conMayusculas(this)" required>
                                </div>                      
                            </div>
                        <div class="col-md-12">    
                            <div class="form-group">
                                <label for="exampleInputEmail1">Contraseña</label>
                                <input type="password" class="form-control" name="password"  placeholder="Ingresa tu contraseña" required>
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