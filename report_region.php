<?php
session_start();
if ($_SESSION['id_user'] == false) {
  # code...
  header("Location:login.php");
}
include_once('databases_registro.php');
mysqli_set_charset($mysqli, 'utf8');
$id_user = $_SESSION["id_user"];
$var_reg = $_SESSION["region"];
$nom_region = $_SESSION["nom_region"];
// Funcion para obtener el listado de participantes por region
$registros = run_registros_tall_acept($var_reg); // esta funcion solo muestra a los usuarios de tp_status  1  
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
                        <li class="nav-item activo">
                            <a class="nav-link" href="./login.php">
                                SALIR
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>



  <div class="container">
  <div class="row">
     <div class="col-md-12 text-center"><br><br>
      <h3>REPORTE DE LA REGIÓN <?php echo $nom_region; ?></h3>
     </div>

    <!--<form action="genera_report.php" method="POST">
            <?php // if($var_reg==1){ ?>
           <input type="hidden" name="region" value="<?php //echo '01';?>"><br>
           <button type="submit" class="btn btn-primary">Generar reporte SUR SURESTE</button><br><br>
           <?php  // } elseif ($var_reg==2){?>
            <input type="hidden" name="region" value="<?php //echo '02';?>"><br>
            <button type="submit" class="btn btn-primary">Generar reporte CENTRO SUR</button><br><br> 
           <?php //} elseif ($var_reg==3){?>
            <input type="hidden" name="region" value="<?php //echo '03';?>"><br>
            <button type="submit" class="btn btn-primary">Generar reporte CENTRO OCCIDENTE</button><br><br> 
           <?php// } elseif ($var_reg==4){?>
            <input type="hidden" name="region" value="<?php // echo '04';?>"><br>
            <button type="submit" class="btn btn-primary">Generar reporte NORESTE</button><br><br> 
           <?php// } elseif ($var_reg==5){?>
            <input type="hidden" name="region" value="<?php // echo '05';?>"><br>
            <button type="submit" class="btn btn-primary">Generar reporte NOROESTE</button><br><br> 
           <?php //} else {?>
            <input type="hidden" name="region" value="<?php // echo '06';?>"><br>
            <button type="submit" class="btn btn-primary">Generar reporte METROPOLITANA</button><br><br> 
           <?php //} ?>
            
    </form>-->
    <table id="example" class="table table-responsive table-striped table-bordered" style="width: 100%;">
      <thead>
        <tr>
          <th class="col-md-5">Datos</th>
          <th class="col-md-5">Semblanza</th>
          <!-- <th class="col-md-1">Estatus</th> -->
        </tr>
      </thead>
      <tbody>
        <?php

        while ($reg = $registros->fetch_assoc()) {
        ?>
          <tr style="border-bottom:0px">
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

              }  ?>

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
    </table>
  </div>
  </div>
</body>

</html>