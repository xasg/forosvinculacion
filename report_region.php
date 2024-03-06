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
    <?php
    // Supongo que $var_reg contiene los datos necesarios
    $registros = run_registros_region($var_reg);
    ?>

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
                            <a class="nav-link" href="index.html">
                                INICIO
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" onclick="mostrarTexto('texto1')">
                                REGÍSTRO
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
        </div>
        <section>
            <div id="accordion">
                <div class="row justify-content-center mt-5">
                    <div class="pad col-md-2 text-center">
                        <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="view overlay">
                                <button type="button" class="btn btn-outline-danger btn-lg" style="width: 200px; height: 50px;" onclick="mostrarTexto('texto1')">
                                    <p>VER REGISTRO</p>
                                </button>
                            </div>
                        </a>
                    </div>
                    <div class="pad col-lg-2 col-md-2 text-center">
                        <a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <div class="view overlay">
                                <!--<button type="button" class="btn btn-outline-danger "style="width: 200px; height: 50px;" onclick="mostrarTexto('texto2')">
                                    <p>REGISTRAR</p>
                                </button>-->
                            </div>
                        </a>
                    </div>
                    <div class="pad col-lg-2 col-md-2 text-center">
                        <a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <div class="view overlay">
                                <button type="button" class="btn btn-outline-danger " style="width: 200px; height: 50px;" onclick="mostrarTexto('texto2')">
                                    <p>REGISTRAR</p>
                                </button>
                            </div>
                        </a>
                    </div>
                </div>

                <!---------------------------------------------------------------->

                <div id="texto1" style="display: none;">
                    <br>
                    <table class="table table-responsive table-striped table-bordered">
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
                </div>
                <!------------------------------------------------------------------->

                <div id="texto2" style="display: none;">
                <!------------------------------------------------------------------------------------------------->
              <form action="update_registro.php" method="POST">
                <div class="row">
                  <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" onChange="conMayusculas(this)" required=""      id="nombre"  required>
                  </div>
                  <div>
                    <label for="apellido1">Primer Apellido:</label>
                    <input type="text" id="apellido1" name="apellido1" required>
                  </div>
                  <div>
                    <label for="apellido2">Segundo Apellido:</label>
                    <input type="text" id="apellido2" name="apellido2" required>
                  </div>
                </div>

                  <div>
                    <label for="institucion">Institución:</label>
                    <input type="text" id="institucion" name="institucion" required>
                  </div>
                  <div>
                    <label for="cargo">Cargo en la Institución:</label>
                    <input type="text" id="cargo" name="cargo" required>
                  </div>
                  <div>
                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" id="correo" name="correo" required>
                  </div>
              <button type="submit">Registrar</button>
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
</body>
</html>