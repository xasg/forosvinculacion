 <?php
   include_once('databases_usuario.php');
   mysqli_set_charset( $mysqli, 'utf8');
   $entidad=view_entidad();
   $region=view_region();
   $foro=view_foro(); 
   ?> 
<!DOCTYPE html>
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
                <a class="nav-link" href="#">INICIO</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">CALENDARIO</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">MEMORIA</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#">REGISTRO</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link"  href="#">CONTACTO</a>
              </li>
            </ul>
        </div>
   </nav> 



<!--
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <video class="video-fluid z-depth-1 d-block w-100" autoplay loop muted alt="First slide">
       <source src="img/Lobby 1080.mp4" type="video/mp4" />
      </video>-->
      <!--apate <img class="d-block w-100" src="img/Auditorios.png" alt="First slide">-->
      <!--<button type="button" class="btn btn-light texto-encima">Light</button>
      <button type="button" class="btn btn-light centrado">Light</button>
    </div>    
  </div>
</div>-->


         
               <div class="container">
                     <div class="row">
                            <form action="update_registro.php" method="POST">                                  
                                 <!--Datos personales-->
                                 <div class="row">

                                    <div class="col-xl-12">
                                       <br><br>
                                       <h4>Datos personales</h4> 
                                    </div>
                                    <div class="col-xl-4">
                                       <div class="form-group"> 
                                          <label>Nombre(s):</label>
                                          <input type="text" class="form-control" name="nombre" onChange="conMayusculas(this)" required="">
                                       </div>
                                    </div>
                                    <div class="col-xl-8">
                                       <div class="form-group"> 
                                          <label>Apellidos:</label>
                                          <input type="text" class="form-control" name="apellidos" onChange="conMayusculas(this)" required="">
                                       </div>
                                    </div>                                   
                                 </div>

                                 <!-- Datos personales-->
                                 <div class="row">
                                    <div class="col-xl-4">
                                       <div class="form-group"> 
                                          <label>Correo electrónico:</label>
                                          <input type="email" class="form-control" name="email" onChange="conMayusculas(this)" required="">
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                          <label>Teléfono institucional</label>
                                          <input type="text" class="form-control" name="tel_ins">
                                       </div>
                                    </div>
                                    <div class="col-xl-1">
                                       <div class="form-group"> 
                                          <label for="nombre">Ext.</label>
                                          <input type="text" class="form-control" name="ext">
                                       </div>
                                    </div>
                                    <div class="col-xl-4">
                                       <div class="form-group"> 
                                          <label>Móvil</label>
                                          <input type="text" class="form-control" name="tel_movil" required="">
                                       </div>
                                    </div>
                                    <div class="col-xl-4">
                                    <select id="status" name="status" onChange="mostrar(this.value);">
                                      <option value="0">selecciona</option>
                                      <option value="Estudiante">Estudiante</option>
                                      <option value="Egresado">Egresado</option>
                                      <option value="Docente">Docente</option>
                                      <option value="paro">En el paro</option>
                                   </select>
                                     </div>
                                 </div> 

                                   <div class="col-md-12">
                                            <div id="Estudiante" style="display: none;">
                                                 <p>* Para poder participar deben ser estudiantes o egresados de educación dual<br>* Estudiantes y egresados participantes en programas de emprendimiento asociativo</p>
                                             </div>
                                             <div id="Egresado" style="display: none;">
                                                 <p>* Para poder participar deben ser estudiantes o egresados de educación dual<br>* Estudiantes y egresados participantes en programas de emprendimiento asociativo</p>
                                             </div>
                                             <div id="Docente" style="display: none;">
                                                 <p>* IES con experiencia en educación dual: titulares, responsables académicos, de vinculación y docentes<br>* IES con experiencia en emprendimiento: titulares, responsables académicos, de vinculación, docentes y operadores de programas de emprendimiento</p>
                                             </div>

                                    </div>

                              </form>
                     </div>
                  </div>
         </section>



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
      <!-- Main Wrapper -->
      <script src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
      <script src="js/bootstrap-multiselect.js"></script>
      <script language="JavaScript"> 
         function conMayusculas(field) 
         { 
             field.value = field.value.toUpperCase() 
         }   
      </script>
     


      <script type="text/javascript">
         function mostrar(id) {
             if (id == "otro") {
                 $("#otro").show();
             }
         }
      </script>


<script type="text/javascript">
function mostrar(id) {
    if (id == "Estudiante") {
        $("#Estudiante").show();
        $("#Egresado").hide();
        $("#Docente").hide();
        $("#paro").hide();
    }

    if (id == "Egresado") {
        $("#Estudiante").hide();
        $("#Egresado").show();
        $("#Docente").hide();
        $("#paro").hide();
    }

    if (id == "Docente") {
        $("#estudiante").hide();
        $("#trabajador").hide();
        $("#Docente").show();
        $("#paro").hide();
    }

    if (id == "paro") {
        $("#estudiante").hide();
        $("#trabajador").hide();
        $("#autonomo").hide();
        $("#paro").show();
    }
}
</script>

   </body>
</html>