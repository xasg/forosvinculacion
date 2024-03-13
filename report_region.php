<?php
session_start();
// if ($_SESSION['id_user'] == false) {
//   # code...
//   header("Location:login.php");
// }
include_once('databases_registro.php');
mysqli_set_charset($mysqli, 'utf8');
$id_user = $_SESSION["id_user"];
$var_reg = $_SESSION["region"];
$nom_region = $_SESSION["nom_region"];
// Funcion para obtener el listado de participantes por region
 // esta funcion solo muestra a los usuarios de tp_status  1  
?>

<!DOCTYPE html>
<html lang="es">

<head>


<style>
      .btn-outline-danger{
         color:#10312B;
         border-color:#235b4e;
         transition: all linear .6s;
      }
      .btn-outline-danger:hover{
         background: linear-gradient(to top ,#10312B,#235b4e);
         border-color:  #10312B;
         transition: all linear .6s;
      }

      body {
            font-family: 'Montserrat', sans-serif;
        }
        .verde{
    background:#245c4f !important;
    color: #fff !important; 
    font-size: 20px !important;
    border-bottom: 2px solid #fff !important;
}

.cafe-claro{
    background:#efe6d5 !important; 
    color: #000 !important; 
    font-size: 20px;
}
.cafe-claro-size{
    background:#efe6d5 !important; 
    color: #000 !important; 
    text-align: left !important;
}
.text-left{
    text-align: left !important;
    width:70%;
}

.cafe{
    background:#bfa27a; 
    color: #fff;
}
.nav.nav-tabs .nav-item a.nav-link {
    color: #8D203D ;
}
.nav.nav-tabs .nav-item a.nav-link:hover {
    color: #fff ;
    background:#8D203D !important;
}
/* .active{
    background: #8D203D !important;
    color:#fff !important;
} */
   </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link rel="icon" href="assets/images/favicon.png" sizes="35x35" type="image/png">
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
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
</head>

<body>
<p>
el valor de la region es 

<?php
// Supongo que $var_reg contiene los datos necesarios
echo $var_reg;

$registros =run_registros_region(6)
?>

<table border = '1' >
    <thead>
        <tr>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Nombre de la Organización</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($registro = $registros->fetch_assoc()): ?>
            <tr>
                <td><?php echo $registro['id_usuario']; ?></td>
                <td><?php echo $registro['dt_nombre']; ?></td>
                <td><?php echo $registro['dt_nom_org']; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>


</p>

   <!-- Menu de navegación -->
    <div class="container-fluid mx-0 px-0" style="background-color: #8D203D;">
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
                        <a class="nav-link" href="index.html" >
                           INICIO
                        </a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" onclick="mostrarTexto('texto1')">
                           REGÍSTRO
                        </a>
                     </li>
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



  <div class="container">
  <div class="row">
     <div class="col-md-12 text-center"><br><br>
      <h3>REPORTE DE LA REGIÓN  <?php echo $nom_region; ?></h3>
     </div>




     <section>
            <div id="accordion">
                <div class="row justify-content-center mt-5">
                    <div class="pad  col-md-2 text-center ">
                        <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            <div class="view overlay">
                                <button type="button" class="btn btn-outline-danger btn-lg" style="width: 200px; height: 50px;" onclick="mostrarTexto('texto1')">
                                    <p>VER REGISTRO</p>
                                </button>
                            </div>
                        </a>
                    </div>
                    <div class="pad  col-lg-2 col-md-2 text-center">
                        <a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            <div class="view overlay">
                                <!--<button type="button" class="btn btn-outline-danger "style="width: 200px; height: 50px;" onclick="mostrarTexto('texto2')">
                                    <p>REGISTRAR</p>
                                </button>-->
                            </div>
                        </a>
                    </div>
                    <div class="pad  col-lg-2 col-md-2 text-center">
                        <a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            <div class="view overlay">
                                <button type="button" class="btn btn-outline-danger "style="width: 200px; height: 50px;" onclick="mostrarTexto('texto2')">
                                    <p>REGISTRAR</p>
                                </button>
                            </div>
                        </a>
                    </div>
                   
                    
                    <!---------------------------------------------------------------->

                    <div id="texto1" style="display: none;">
                    <br> 

                    

                        
                    
                    






                        
                    
                    </div>
                    <!------------------------------------------------------------------->



                    <div id="texto2" style="display: none;">
                        <br>
                        <p>Este es una breve descripcion del documento 2</p>
                        <br>
                        <a href="docs/Anfitrionia02.pdf" class="btn btn-primary" download>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                            </svg>
                        </a>
                    </div>
                    <div id="texto3" style="display: none;">
                        <br>
                        <p>Este es una breve descripcion del documento 3</p>
                        <br>
                        <a href="docs/Anfitrionia02.pdf" class="btn btn-primary" download>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                            </svg>
                        </a>
                    </div>
                    
        </section>  




     <!--<form action="genera_report.php" method="POST">
            <?php  if($var_reg==1){ ?>
           <input type="hidden" name="region" value="<?php echo '01';?>"><br>
           <button type="submit" class="btn btn-primary">Generar reporte SUR SURESTE</button><br><br>
           <?php   } elseif ($var_reg==2){?>
            <input type="hidden" name="region" value="<?php echo '02';?>"><br>
            <button type="submit" class="btn btn-primary">Generar reporte CENTRO SUR</button><br><br> 
           <?php } elseif ($var_reg==3){?>
            <input type="hidden" name="region" value="<?php echo '03';?>"><br>
            <button type="submit" class="btn btn-primary">Generar reporte CENTRO OCCIDENTE</button><br><br> 
           <?php } elseif ($var_reg==4){?>
            <input type="hidden" name="region" value="<?php  echo '04';?>"><br>
            <button type="submit" class="btn btn-primary">Generar reporte NORESTE</button><br><br> 
           <?php } elseif ($var_reg==5){?>
            <input type="hidden" name="region" value="<?php  echo '05';?>"><br>
            <button type="submit" class="btn btn-primary">Generar reporte NOROESTE</button><br><br> 
           <?php } else {?>
            <input type="hidden" name="region" value="<?php  echo '06';?>"><br>
            <button type="submit" class="btn btn-primary">Generar reporte METROPOLITANA</button><br><br> 
           <?php } ?>
            
    </form>-->
    <!--<table id="example" class="table table-responsive table-striped table-bordered" style="width: 100%;">
      <thead>
        <tr>
          <th class="col-md-5">Datos</th>
          <th class="col-md-5">Semblanza</th>-->
          <!-- <th class="col-md-1">Estatus</th> -->
       <!-- </tr>
      </thead>
      <tbody>-->
        <!--<?php

        while ($reg = $registros->fetch_assoc()) {
        ?>-->
          <!--<tr style="border-bottom:0px">
            <td>
              INSTITUCIÓN: <?php if ($reg['dt_nom_org'] == NULL) {
                echo $reg['dt_nom_org2'];
              } else {
                echo $reg['dt_nom_org'];
              } ?><br>
              Nombre:<?php echo $reg['dt_nombre'] . " " . $reg['dt_apaterno'] . " " . $reg['dt_amaterno']; ?><br>
              Correo: <?php echo $reg['dt_email']; ?><br>
              Cargo: <?php if ($reg['dt_cargo'] == NULL) {
                echo $reg['dt_cargo2'];
              }else{
                echo $reg['dt_cargo'];
              };
              ?>-  <?php if ($reg['dt_otro_cargo'] == NULL) {
                echo $reg['dt_otro_cargo2'];
              }else{
                echo $reg['dt_otro_cargo'];
              };?><br>
              Experiencia: 
              <?php if ($reg['dt_educacion_dual'] != 0) {
              ?>
                Educación Dual, 
              <?php

              }  ?>-->

              <?php if ($reg['dt_economia_social_solidaria'] != 0) {
              ?>
                Emprendimiento asociativo(ESS), 
              <?php

              }  ?>

              <?php if ($reg['dt_servicio_social_comunitario'] != 0) {
              ?>
                Servicio social comunitario
              <?php

              }  ?>  <br>
              ACTIVIDADES SELECCIONADAS:
              <?php if($reg['dt_mesa1']!=NULL) 
              { 
                ?>
                <p>Mesa: Reunión de de responsables de vinculación de las IES</p>
                <?php
                
              }  ?> 
              
              <?php if($reg['dt_mesa2']!=NULL) 
              { 
                ?>
                <p>Mesa 1: Emprendimiento asociativo(ESS)</p>
                <?php
                
              }  ?> 
              
              <?php if($reg['dt_mesa3']!=NULL) 
              { 
                ?>
                <p>Mesa 2: Educación Dual</p>
                <?php
                
              }  ?>
              
              <?php if($reg['dt_mesa4']!=NULL) 
              { 
                ?>
                <p>Mesa 3: Servicio Social</p>
                <?php
                
              }  ?>
              
              </td>
          <td>
            <a class="btn btn-success btn-sm btn-block" data-toggle="collapse" href="#collapse<?php echo $reg['id_usuario'];?>" role="button" aria-expanded="false" aria-controls="collapse<?php echo $reg['id_usuario'];?>">
              Consultar semblanza
            </a>
            <div class="collapse" id="collapse<?php echo $reg['id_usuario'];?>">
            <div class="card card-body">
             <?php echo $reg['dt_comentario']; ?>
            </div>
            </div>  
          </td>
            <!-- <td>
              <?php if ($reg['tp_estatus'] == "INSCRITO") { ?>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#example<?php echo $reg['id_usuario']; ?>">
                Inscrito
              </button>                
              <?php } elseif ($reg['tp_estatus']=="ACEPTADO") { ?>
                <button type="submit" class="btn btn-success">Aceptado</button>
              <?php } else { ?>
                <button type="submit" class="btn btn-danger">Rechazado</button>
              <?php } ?>
          </td> -->
          </tr>
       <?php } ?>
      </tbody>
    </table>-->
  </div>
  </div>


  <script>
       function mostrarTexto(idTexto) {
           var textos = document.querySelectorAll('[id^="texto"]');
           for (var i = 0; i < textos.length; i++) {
               if (textos[i].id === idTexto) {
                   textos[i].style.display = "block";
               } else {
                   textos[i].style.display = "none";
               }
           }
       }
   </script>
</body>

</html>