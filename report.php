<?php
include_once('databases_registro.php');
mysqli_set_charset($mysqli, 'utf8');
$var_reg=1;
if(isset($_GET['region'])){
  $var_reg=$_GET['region'];
}
// Funcion para obtener el listado de participantes por region
$registros = run_registros_tall($var_reg);
// Funcion para obtener el resumen de participantes por region
$participantes = get_region_users();

// Inicializacion de variables por region
$sur_sureste = $centro_sur = $centro_occidente = $noreste = $noroeste = $metropolitana = 0;

while ($region = $participantes->fetch_assoc()) {
  if($region['dt_region']=='01'){
    $sur_sureste=$region['users'];
  }else if($region['dt_region']=='02'){
    $centro_sur=$region['users'];
  }else if($region['dt_region']=='03'){
    $centro_occidente=$region['users'];
  }else if($region['dt_region']=='04'){
    $noreste=$region['users'];
  }else if($region['dt_region']=='05'){
    $noroeste=$region['users'];
  }else if($region['dt_region']=='06'){
    $metropolitana=$region['users'];
  }
}
        
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


  <div class="container-fluid mx-0 px-0" style="background-color: #8D203D;">
    <div class="container">
      <nav class="navbar navbar-dark navbar-expand-lg navigation">
        <img alt="Responsive image" class="img-fluid" src="img/logo.png" width="150">
        <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
          <span class="navbar-toggler-icon"> </span>
        </button>
      </nav>
    </div>
  </div>
  <br><br>
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link <?php if($var_reg==1){echo 'active';}?>" href="report.php?region=1">SUR SURESTE (<?=$sur_sureste?>)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($var_reg==2){echo 'active';}?>" href="report.php?region=2">CENTRO SUR (<?=$centro_sur?>)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($var_reg==3){echo 'active';}?>" href="report.php?region=3">CENTRO OCCIDENTE (<?=$centro_occidente?>)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($var_reg==4){echo 'active';}?>" href="report.php?region=4">NORESTE (<?=$noreste?>)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($var_reg==5){echo 'active';}?>" href="report.php?region=5">NOROESTE (<?=$noroeste?>)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($var_reg==6){echo 'active';}?>" href="report.php?region=6">METROPOLITANA (<?=$metropolitana?>)</a>
        </li>
      </ul>
    </div>
  </div>
</div><br>


  <div class="container">
  <div class="row">
    <table id="example" class="table table-responsive table-striped table-bordered" style="width: 100%;">
      <thead>
        <tr>
          <th class="col-md-5">Datos</th>
          <th class="col-md-5">Semblanza</th>
          <th class="col-md-1">Estatus</th>
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
            <td>
              <?php if ($reg['tp_estatus'] == 0) {
              ?>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#example<?php echo $reg['id_usuario'] ?>">
                Validar
              </button>

              <!-- Modal -->
              <div class="modal fade" id="example<?php echo $reg['id_usuario'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">                      
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <h5>Estás seguro de validar a <?php echo $reg['dt_nombre'] . " " . $reg['dt_apaterno'] . " " . $reg['dt_amaterno']; ?> como asistente</h5>
                    </div>
                    <div class="modal-footer">
                       <form action="update_new.php" method="POST">
                  <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $reg['id_usuario'] ?>">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Validar </button>
                  </div>
                </form>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              } else {  ?>
                <button type="submit" class="btn btn-success">Asistente</button>
              <?php } ?>


            </td>

          </tr>

        <?php
        }

        ?>



      </tbody>
    </table>
  </div>
  </div>
</body>

</html>