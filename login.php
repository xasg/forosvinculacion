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
  <style>
    .gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;
/* background: #10312B; */

/* Chrome 10-25, Safari 5.1-6 */
/* background: -webkit-linear-gradient(120deg, #4f2550 10%, #57007B 30%, #8b45b4,#fafafa); */
background: -webkit-linear-gradient(to top ,#10312B,#235b4e);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
/* background: linear-gradient(120deg, #4f2550 10%, #57007B 30%, #8b45b4,#fafafa); */
background: linear-gradient(to top ,#10312B,#235b4e 90%);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
.gradient-custom-2-border{
   border:2px solid #235b4e;
   box-shadow:1px 1px 6px #235b4e;
   border-radius:12px;
   transition:all linear .3s;
}
.gradient-custom-2-border:hover{
   filter: drop-shadow(1px 1px 6px #235b4e);
}
  </style>

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
                     <!-- <li class="nav-item active">
                        <a class="nav-link" href="index.html">
                           INICIO
                        </a>
                     </li> -->
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
   <!-- <form action="controller/login.php" method="POST">               
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
    
  -->
  <section class="h-100 gradient-form" style="background-color: #eee; min-height: 100vh;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-sm-8 col-md-8 col-xl-5">
            <div class="card rounded-3 text-black">
              <div class="row g-0">
                <div class="col-lg-12 gradient-custom-2-border">
                  <div class="card-body p-md-5 mx-md-4 ">
    
                    <div class="text-center gradient-custom-2 p-4 mb-5">
                      <!-- <img src="https://raw.githubusercontent.com/Katashikunomo/fempresarial/main/imgs/empresarial.png" -->
                      <img src="img/logo_2024.png"
                        style="width: 185px;" alt="logo">
                      <br>
                    </div>
    
                    <form action="controller/login.php" method="POST">
                      <p>
                        <b>Ingresa con tu correo y password</b>
                      </p>
    
                      <div class="form-outline mb-4 ">
                        <input type="email" id="correo" name="correo" class="form-control"
                          placeholder="Ingresa tu correo" required/>
                        <label class="form-label" for="form2Example11">Correo</label>
                      </div>
    
                      <div class="form-outline mb-4">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Ingresa tu password" required/>
                        <label class="form-label" for="form2Example22">Password</label>
                      </div>
                      <div class="text-center pt-1 mb-5 pb-1">
                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" style="border-radius: 22px; border: 1px solid #4f2550; box-shadow:-1px 2px 5px #10312B;" type="submit">Iniciar sesión</button>                        <br>
                        <!-- <a class="text-muted" href="#!">Recuperar password?</a> -->
                      </div>
                      <?php
                     // Esto evaluará a TRUE así que el texto se imprimirá.
                    if (isset($_GET['error'])) {
                        ?>
                        <div class="alert alert-danger" role="alert">
                          Los datos de acceso que ingreso son incorrectos
                        </div>                   

                   <?php } ?>
    
                      <!-- <div class="d-flex align-items-center justify-content-center pb-4">
                        <p class="mb-0 me-2">Don't have an account?</p>
                        <button type="button" class="btn btn-outline-danger">Create new</button>
                      </div> -->
    
                    </form>
    
                  </div>
                  <div class="col-md-12">
                     <img src="img/Tira_de_Logos_IES.png" width="100%" height="100%" alt="">
                  </div>
                </div>
                <!-- <div class="row col-lg-6 d-flex align-items-center ">

                  <div class="text-white ">
                     <div class="col-md-12 text-center mt-5">
                     <img src="img/icon.png" width="40%"alt="">
                     
                     </div>
                     <h4 class="mb-4">Panel de administración Foros de Vinculación 2024</h4>
                     <img src="img/colab.png" width="100%" height="100%" alt="">
                        <p class="small mb-0">
                           Los Foros de Vinculacion 2024 para la Educación Dual, el Emprendimiento Asociativo, el Servicio Social Comunitario y la Industria de Alta Tecnología buscan dar seguimiento al trabajo colectivo
                        </p>
                        <p class="small mb-0">
                           Y en particular fortalecer las acciones de vinculación con los sectores productivos estratégicos, que permita potencializar las líneas de acción impulsadas, con un enfoque primordialmente regional y estatal.
                        </p>
                        <img src="img/ANUIES_FESE.png" width="100%"alt="">
                  </div>
                  <div class="col-md-12">
                     <img src="img/Tira_de_Logos_IES.png" width="100%" height="100%" alt="">
                  </div>
                
               </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>

</html>