<?php
session_start();
if( ($_SESSION["tp_usuario"] != 2 )){
  header("Location:logout.php");
 }
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

.btn-outline-danger{
      border-color: #10312B !important;
      color: #10312B !important;
    }
    .btn-outline-danger:hover{
      color:#fff !important;
      background: linear-gradient(to top ,#10312B,#235b4e) !important;      
    }

    .margen_boton_derecho 
    {
      margin-right: 10%;
      
    }

    .margen_boton_izquierdo 
    {
      margin-left: 10%;
    }



   /* @media  (max-width: 700px) 
    {

    
    }*/
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
    <?php
    // // Supongo que $var_reg contiene los datos necesarios
    // $registros = run_registros_region($var_reg);
    $registros = run_registros_tall($var_reg);
    ?>

    <!-- Menu de navegación -->
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
                        <li class="nav-item active">
                            <a class="nav-link" href="logout.php">
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
                <h3>REGIÓN <?php echo $nom_region; ?></h3>
            </div>
        </div>
        <section>
            <div id="accordion" >
                <div class="row justify-content-center mt-5"   >
                    <div class="pad col-lg-2 col-md-6 text-center  margen_boton_derechos" >
                        <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="view overlay">
                                <button type="button" class="btn btn-outline-danger btn-lg" style="width: 200px; height: 50px;" onclick="mostrarTexto('texto1')">
                                    <p>VER REGISTROS</p>
                                </button>
                            </div>
                        </a>
                    </div>


                    <div class="pad col-lg-2 col-md-6 text-center   margen_boton_izquierdo " >
                        <a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <div class="view overlay">
                                <button type="button" class="btn btn-outline-danger btn-lg" style="width: 200px; height: 50px;" onclick="mostrarTexto('texto2')">
                                    <p>REGISTRAR</p>
                                </button>
                            </div>
                        </a>
                    </div>
                </div>

                <!---------------------------------------------------------------->

                <div id="texto1" style="display: block; margin-bottom:120px;">
                    <br>

                    <div class="table-responsive">
                      <table id="example" class="table table-responsive table-striped table-bordered" style="width: 100%;">
                        <thead>
                          <tr>
                            <th class="col-md-2" >#Folio <input type="text" class="form-control form-control-sm input-search" data-column="0"></th>
                            <th class="col-md-4">Nombre <input type="text" class="form-control form-control-sm input-search" data-column="1"></th>
                            <th class="col-md-4 ">Correo <input type="text" class="form-control form-control-sm input-search" data-column="2"></th>
                            <th class="col-md-5">Cargo <input type="text" class="form-control form-control-sm input-search" data-column="3"></th>
                            <!-- <th class="col-md-5">Experiencia</th> -->
                            <!-- <th class="col-md-5">Semblanza</th> -->
                            <!-- <th class="col-md-1">Estatus</th> -->
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                  
                          while ($reg = $registros->fetch_assoc()) {
                          ?>
                            <tr style="border-bottom:0px">
                                <td class="text-center">
                                  <b>
                                    <?php echo $reg['id_usuario'];?> 
                                  </b>
                                </td>
                                
                                <td>
                                  
                                    <?php echo $reg['dt_nombre'].' '.$reg['dt_apaterno'].' '.$reg['dt_amaterno'];?> 
                                  
                                </td>
                  
                                <td>
                                  
                                    <?php echo $reg['dt_email'];?> 
                                  
                                </td>
                  
                                <td>
                                    <?php if ($reg['dt_cargo'] == NULL) {
                                      echo $reg['dt_cargo2'];
                                    }else{
                                      echo $reg['dt_cargo'];
                                    };
                                    ?> <?php if ($reg['dt_otro_cargo'] == NULL) {
                                      echo $reg['dt_otro_cargo2'];
                                    }else{
                                      echo $reg['dt_otro_cargo'];
                                    };?>
                                  
                                </td>
                  
                  
                  
                                <!-- <td>
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
                                    
                                </td> -->
                            <!-- <td>
                              <a class="btn btn-success btn-sm btn-block" data-toggle="collapse" href="#collapse<?php echo $reg['id_usuario'];?>" role="button" aria-expanded="false" aria-controls="collapse<?php echo $reg['id_usuario'];?>">
                                Consultar semblanza
                              </a>
                              <div class="collapse" id="collapse<?php echo $reg['id_usuario'];?>">
                              <div class="card card-body">
                              <?php echo $reg['dt_comentario']; ?>
                              </div>
                              </div>  
                            </td> -->
                              <!-- <td>
                                <?php if ($reg['tp_estatus'] == "INSCRITO") { ?>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#example<?php echo $reg['id_usuario']; ?>">
                                  Validar
                                </button>
                  
                                
                                <div class="modal fade" id="example<?php echo $reg['id_usuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">                      
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <h5>Estás seguro de validar a <?php echo $reg['dt_nombre'] . " " . $reg['dt_apaterno'] . " " . $reg['dt_amaterno']; ?> como asistente</h5>
                                      
                                  <form action="update_new.php" method="POST">
                                    <div class="row">
                                      <div class="col-md-12">                 
                                      <input type="hidden" name="id" value="<?php echo $reg['id_usuario']; ?>"><br>
                                      <input type="hidden" name="region" value="<?php echo $var_reg; ?>">
                                      <div class="col-md-6">
                                      <div class="form-check">
                                          <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="validacion" value="ACEPTADO"><h5>Aceptado</h5>
                                          </label>
                                      </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-check">
                                          <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="validacion" value="RECHAZADO"><h5>Rechazado</h5>
                                          </label>
                                        </div>
                                      </div><br>
                  
                                      <button type="submit" class="btn btn-primary">Validar </button>
                                  
                                    </div>
                                  </div>
                                  </form>
                                  </div>
                  
                                    <div class="modal-footer">
                                    </div>
                                  </div>
                                </div>
                                <?php } elseif ($reg['tp_estatus']=="ACEPTADO") { ?>
                                  <button type="submit" class="btn btn-success">Aceptado</button>
                                <?php } else { ?>
                                  <button type="submit" class="btn btn-danger">Rechazado</button>
                                <?php } ?>
                              </div>
                            </td> -->
                  
                  
                            </tr>
                  
                        <?php } ?>
                  
                        </tbody>
                      </table>
                    </div>
                </div>
                <!------------------------------------------------------------------->

                <div id="texto2" style="display: none; margin-bottom:120px;">
                <!------------------------------------------------------------------------------------------------->
              <form action="update_registro_de_prueba.php" method="POST">
                <input type="hidden" name="registro_manual" value="<?php echo '1'; ?>">
                <input type="hidden" name="region" value="<?php echo $var_reg; ?>">

                <div class="row">
                  <div class="form-group">
                    <label for="nombre">Nombre(s):</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" onChange="conMayusculas(this)"   >
                  </div>
                  <div>
                    <br>
                    <label for="apellido1">Primer Apellido:</label>
                    <input type="text" class="form-control" id="apaterno" name="apaterno" onChange="conMayusculas(this)" >
                  </div>
                  <div>
                    <br>
                    <label for="apellido2">Segundo Apellido:</label>
                    <input type="text" class="form-control" id="amaterno" name="amaterno" onChange="conMayusculas(this)" >
                  </div>
                </div>
                <div class="col-xl-6">
                     
                
               <!-- <label>Organización de procedencia</label><br>-->
                     <!--<div class="form-group">
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="organizacion" id="org_ies" value="ies" required="">
                           <label class="form-check-label">Educativo</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="organizacion" id="org_otro" value="social" required="">
                           <label class="form-check-label">Social</label>
                        </div>
                       
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="organizacion" id="org_otro" value="publico" required="">
                           <label class="form-check-label">Público</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="organizacion" id="org_otro" value="privado" required="">
                           <label class="form-check-label">Privado</label>
                        </div>        
                     </div>-->
                  </div>
                  <!--<div>
                    <br>
                    <label for="institucion">Institución:</label>
                    <input type="text" class="form-control" id="institucion" name="institucion" onChange="conMayusculas(this)"required>
                  </div>-->
                  <div>
                    <br>
                    <label for="cargo">Nombre de la organizacion:</label>
                    <input type="text" class="form-control" id="nom_org" name="nom_org" onChange="conMayusculas(this)">
                  </div>
                  <div>
                    <br>
                    <label for="cargo">Cargo en la organizacion:</label>
                    <input type="text" class="form-control" id="otro_cargo" name="otro_cargo" onChange="conMayusculas(this)">
                  </div>
                  <div>
                    <br>
                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" class="form-control" id="email" name="correo" onChange="conMayusculas(this)">
                  </div>
                  <br>
                  <div class="col-xl-4">
                     <div class="form-group">
                        <label for="nombre"><br>Móvil (10 dígitos sin espacios)</label>
                        <input type="text" class="form-control" name="tel_movil" maxlength="10" min=0  pattern="[0-9]{10}">
                     </div>
                  </div>
                   <br>
                  <button  class = "btn btn-outline-danger" type="submit">Registrar</button>
                  <br>
              </form>
                            
                <!------------------------------------------------------------------------------------------------->                    
                </div>
            </div>
        </section>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchBar = document.querySelectorAll(".input-search");

        searchBar.forEach(input => {
            input.addEventListener("input", function() {
                const table = document.getElementById("tabla");
                const rows = table.getElementsByTagName("tr");
                const filter = input.value.toUpperCase();
                const column = input.getAttribute("data-column");

                for (let i = 1; i < rows.length; i++) {
                    const row = rows[i].getElementsByTagName("td")[column];
                    if (row) {
                        const textValue = row.textContent || row.innerText;
                        if (textValue.toUpperCase().indexOf(filter) > -1) {
                            rows[i].style.display = "";
                        } else {
                            rows[i].style.display = "none";
                        }
                    }
                }
            });
        });

        const radioButtons = document.querySelectorAll(".form-check-input");
        radioButtons.forEach(button => {
            button.addEventListener("change", function() {
                const hiddenInput = document.getElementById("asistencia" + button.id.slice(-1));
                hiddenInput.value = button.value;
            });
        });
    });
</script>
</body>
</html>