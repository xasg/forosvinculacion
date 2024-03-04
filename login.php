<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  
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
  <link rel="icon" href="img/icon.png" sizes="35x35" type="image/png">
  <script language="JavaScript"> 
        function conMayusculas(field) 
        { 
            field.value = field.value.toUpperCase() 
        }   
        </script>


</head>

<body>


<body>
   <main>
      <div class="container-fluid mx-0 px-0" style="background: linear-gradient(to top ,#10312B,#235b4e);">
         <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg navigation">
               <a href="index.html">
                  <img alt="Responsive image" class="img-fluid" src="img/logo_2024.png" width="150">
               </a>
               <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                  <span class="navbar-toggler-icon"> </span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mx-auto" style="width:0px;">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.html">
                           INICIO
                        </a>
                     </li>
                    <!-- <li class="nav-item active activo">
                        <a class="nav-link" href="#">
                           PARTICIPACIÓN
                        </a>
                     </li>-->
                     <!-- <li class="nav-item active">
                            <a class="nav-link" href="./agenda.php">
                                AGENDA
                            </a>
                        </li> -->

                  </ul>
               </div>
            </nav>
    </div>
  </div>
  <br><br>

  <div class="container">
    <form action="controller/login.php" method="POST">               
                <div class="row">
                <div class="col-md-12 text-center"><br><br>
                    <h5>Hola, ingresa tus datos de acceso.<br><br></h5>
                </div>
                <div class="col-md-4">
                </div>
                 <div class="col-md-4 border">
                    <div class="col-md-12"><br>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="correo"  placeholder="Ingresa tu email" onChange="conMayusculas(this)" required>
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
                     // Esto evaluará a TRUE así que el texto se imprimirá.
                    if (isset($_GET['error'])) {
                        ?>
                        <div class="alert alert-danger" role="alert">
                          Los datos de acceso que ingreso son incorrectos
                        </div>                   

                   <?php } ?>

                     </div>
                </div>  
 </form>
    
 
  </div>
</body>

</html>