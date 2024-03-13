<?php
session_start();
// if ($_SESSION['id_user'] == false) {
//   # code...
//   header("Location:login.php");
// }
if( ($_SESSION["tp_usuario"] != 7 )){
    header("Location: ../logout.php");
   }
include_once('databases_usuario.php');
mysqli_set_charset($mysqli, 'utf8');
$var_reg=1;
if(isset($_GET['region'])){
  $var_reg=$_GET['region'];
}
// Funcion para obtener el listado de participantes por region
$registros = run_registros_tall();
// Funcion para obtener el resumen de participantes por region


// Inicializacion de Funcion para obtener participantes por region aceptados --------------------

    // --------------------------------------------- Se agrego validaciòn por region de usuarios aceptados, se espera retro


// Inicializacion de variables por region
$sur_sureste = $centro_sur = $centro_occidente = $noreste = $noroeste = $metropolitana = 0;

     
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link rel="icon" href="img/icon.png">
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
  <link rel="stylesheet" href="css/style_navs.css">
  <link rel="stylesheet" href="css/style.css">              
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <style>


      .nav.nav-tabs .nav-item a.nav-link {
      color: #10312B  ;
      }
      .nav.nav-tabs .nav-item a.active {
      color: #fff !important ;
      }
        .nav.nav-tabs .nav-item a.nav-link:hover {
        color: #fff !important ;
        background: linear-gradient(to top ,#10312B,#235b4e) !important;
        }

     .active,.btn-primary{
      background: linear-gradient(to top ,#10312B,#235b4e) !important;
      color: #fff !important;
    }

  </style>
  </head>

<body>

<!-- Menu de navegación -->
    <div class="container-fluid mx-0 px-0" style="background: linear-gradient(to top ,#10312B,#235b4e);">
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg navigation">
            <a href="index.html">
                  <img alt="Responsive image" class="img-fluid" src="../img/logo_2024.png" width="150">
               </a>
                <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon"> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto navigation" style="width:0px;">                        
                        <li class="nav-item activo">
                            <a class="nav-link" href="../logout.php"> <!--Se agrega el logout-->
                                SALIR
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

  <br><br>
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-tabs">

      </ul>
    </div>
  </div>
</div><br>


  <div class="container">
  <div class="row">


    <div class="table-responsive">
      <table id="example" class="table table-responsive table-striped table-bordered" style="width: 100%;">
        <thead>
          <tr>
            <th class="col-md-2" >#Folio <input type="text" class="form-control form-control-sm input-search" data-column="0"></th>
            <th class="col-md-4">Nombre <input type="text" class="form-control form-control-sm input-search" data-column="1"></th>
            <th class="col-md-4 ">Correo <input type="text" class="form-control form-control-sm input-search" data-column="2"></th>
            <th class="col-md-5">gnerar <input type="text" class="form-control form-control-sm input-search" data-column="3"></th>
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
                    <?php echo $reg['id_usuario'];?> <br>
                  </b>
                </td>
                
                <td>
                  
                    <?php echo $reg['dt_nombre'].' '.$reg['dt_apaterno'].' '.$reg['dt_amaterno'];?> 
                  
                </td>
  
                <td>
                  
                    <?php echo $reg['dt_email'];?> 
                  
                </td>
  
                <td>
                  
                <form action="pdf/constancia2023.php" method="POST">
                    <input type="text" id="id_usuario" name="id_usuario" value="<?php echo $reg['id_usuario'];?> " hidden>
                    <button type="sumbit" class="btn btn-primary" method>
                        generar
                    </button>
                </form>
                    
                  
                </td>
            </tr>
  
         <?php } ?>
  
        </tbody>
      </table>
    </div>
  </div>
  </div>
  <script>
  document.addEventListener("DOMContentLoaded", function() {
    const searchBar = document.querySelectorAll(".input-search");
    const tables = document.querySelectorAll(".table");

    searchBar.forEach(input => {
        input.addEventListener("input", function() {
            tables.forEach(table => {
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