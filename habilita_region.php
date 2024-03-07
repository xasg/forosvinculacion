<?php 

   session_start();  
   include_once('databases_registro.php'); 
   include_once('includes/get_Dias.php'); 
   if( ($_SESSION["tp_usuario"] != 6 )){
    header("Location:logout.php");
   }
// -----------------------------------
   mysqli_set_charset( $mysqli, 'utf8');  
   $id=$_SESSION["id_user"];
   $region_id = acces_user_asistencia($id); 

   $region = $_SESSION['region'];

   $dia_reg = $_SESSION['dt_dia'] ;

   $nombre_region = $_SESSION["nom_region"];
   $participantes = valida_regiones_activas();  
   $participantes_inactivos = valida_regiones_inactivas();  
   
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tabla con búsqueda y asistencia</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .btn-primary{
        border: transparent !important;
    }
    .actives{
        background: linear-gradient(to top ,#10312B 90%,#235b4e) !important;
        border: 2px solid #235b4e !important;
    }

</style>

</head>
<body>

<div class="container-fluid mx-0 px-0" style="background: linear-gradient(to top ,#10312B,#235b4e);">
         <div class="container ">
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
                     <!-- Se agregaron estilos -->
                     <!-- <li class="nav-item active activo">
                        <a class="nav-link" href="registro.php">
                           REGISTRO
                        </a>
                     </li> -->
                    
                  </ul>
               </div>
            </nav>
         </div>
      </div>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <!-- <h1 style="border-bottom: 6px solid #10312B;">Lista de asistencia Región : <?= $nombre_region; ?> , Dìa : <?= $dia_reg ?></h1> -->
            <h1 style="border-bottom: 6px solid #10312B;">Regiones Activas por Día</h1>
            <!-- <a
                type="button"
                class="btn btn-primary actives"
                data-bs-toggle="button"
                aria-pressed="false"
                autocomplete="off"
                style="background: linear-gradient(to top ,#10312B,#235b4e);">
                Asistencias Sin validar    
            </a>
            <a
                type="button"
                class="btn btn-primary"
             
                href="asistencia2.php"
                style="background: linear-gradient(to top ,#10312B,#235b4e);">
                Asistencias Validadas    
            </a> -->
            
        </div>
    </div>
    <style>
            #tabla {
  border-collapse: collapse;
  width: 100%;
}

#tabla th, #tabla td {
  border: 1px solid #ddd;
  padding: 8px;
}

#tabla tr:nth-child(even) {
  background-color: #f2f2f2 !important;
}

#tabla tr:nth-child(odd) {
  background-color: #ffffff !important;
}
    </style>
    <div class="row table-responsive">
        <div class="col">
            <table class="table" id="tabla">
                <thead>
                    <tr>
                        <th> # ID <input type="text" class="form-control form-control-sm input-search" data-column="0"></th>
                        <th> Correo Region <input type="text" class="form-control form-control-sm input-search" data-column="1"></th>
      
                        <th>dia 1</th>
                        <th>dia 2</th>
                        <th>Estatus</th>
                        <!-- <th>Acciones</th> -->
                    </tr>
                </thead>
                <?php
                    // if ($dia_reg == 1  || $dia_reg == 2 ) { 
                    foreach ($participantes as $key => $value) { 
                    ?>
                <tbody>
                <tr>
                        <td><?= $value['idusuario']; ?></td>
                        <td><?= $value['dt_correo']; ?></td>
                        <td>
                        <?php if( $value['dt_dia'] == 2 && ($value['dt_status'] == 1  )) { 
                             ?>
                                <form action="includes/activa_dia.php" method="POST">
                                <input type="text" id="idusuario" name="idusuario" value="<?= $value['idusuario']; ?>" hidden>
                                    <input type="text" i="dtcorreo" name="dtcorreo" value="<?= $value['dt_correo']; ?>" hidden>
                                    <input type="text" id="dtstatus" name="dtstatus" value="<?= $value['dt_status']; ?>" hidden>
                                        <!-- Se define el dia que se quiere activar -->
                                        <?php $dia1 = $value['dt_dia']-1 ?>
                                        <input type="text" id="dia" name="dia" value="<?= $dia1; ?>" hidden>
                                        <button type="submit" class="btn btn-success btn-sm">Activar Día <?php echo $dia1; ?></button>
                                <!-- <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal<?= $value['id_usuario']; ?>">Ver detalles</button> -->
                            </form>
                                
                             <?php
                        } else{  ?>
                            Activo
                        <?php
                        }
                        ?>
                        </td>
                        <td>
                        <?php if( $value['dt_dia'] == 1 && ($value['dt_status'] == 1  )) { 
                             ?>
                                <form action="includes/activa_dia.php" method="POST">
                                    <input type="text" id="idusuario" name="idusuario" value="<?= $value['idusuario']; ?>" hidden>
                                    <input type="text" i="dtcorreo" name="dtcorreo" value="<?= $value['dt_correo']; ?>" hidden>
                                    <input type="text" id="dtstatus" name="dtstatus" value="<?= $value['dt_status']; ?>" hidden>
                                    <!-- Se define el dia que se quiere activar -->
                                    <?php $dia2 = $value['dt_dia']+1 ?>
                                    <input type="text" id="dia" name="dia" value="<?= $dia2; ?>" hidden>
                                    <button type="submit" class="btn btn-success btn-sm">Activar Día <?php echo $dia2; ?></button>
                                <!-- <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal<?= $value['id_usuario']; ?>">Ver detalles</button> -->
                            </form>
                                
                             <?php
                        } else{  ?>
                            Activo
                        <?php
                        }
                        ?>
                        </td>

                        <td>
                            <form action="includes/activa_dia.php" method="POST">
                                    <input type="text" id="idusuario" name="idusuario" value="<?= $value['idusuario']; ?>" hidden>
                                    <input type="text" i="dtcorreo" name="dtcorreo" value="<?= $value['dt_correo']; ?>" hidden>
                                    <input type="text" id="dtstatus" name="dtstatus" value="<?= $value['dt_status']; ?>" hidden>
                                    <input type="text" id="desactivar" name="desactivar" value="desactivar" hidden>
                                    <input type="text" id="dia" name="dia" value="<?= $dia2; ?>" hidden>
                                    <button type="submit" class="btn btn-success btn-sm">Desactivar Días </button>
                                <!-- <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal<?= $value['id_usuario']; ?>">Ver detalles</button> -->
                            </form>
                        </td>

                        <!-- <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="asistencia<?= $value['id_usuario']; ?>" id="asistio<?= $value['id_usuario']; ?>" value="si">
                                <label class="form-check-label" for="asistio<?= $value['id_usuario']; ?>">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="asistencia<?= $value['id_usuario']; ?>" id="noAsistio<?= $value['id_usuario']; ?>" value="no">
                                <label class="form-check-label" for="noAsistio<?= $value['id_usuario']; ?>">No</label>
                            </div>
                        </td> -->
                        <!-- <td>
                            <form action="includes/valida_asistencia.php" method="POST">
                                <input type="text" id="idusuario" name="idusuario" value="<?= $value['idusuario']; ?>" hidden>
                                <input type="text" id="idregion" name="idregion" value="<?= $value['region']; ?>" hidden>
                                <button type="submit" class="btn btn-success btn-sm">Validar Asistencia</button>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal<?= $value['id_usuario']; ?>">Ver detalles</button>
                            </form>
                        </td> -->
                    </tr>
                        
                </tbody>
                <?php }  
                    // } ?>
            </table>
        </div>
    </div>

    <h1 style="border-bottom: 6px solid #10312B;">Regiones In Activas</h1>
    <div class="row table-responsive">
        <div class="col">
            <table class="table" id="tabla">
                <thead>
                    <tr>
                        <th> # ID <input type="text" class="form-control form-control-sm input-search" data-column="0"></th>
                        <th> Correo Region <input type="text" class="form-control form-control-sm input-search" data-column="1"></th>
      
                        <th>dia 1</th>
                        <th>dia 2</th>
                        <th>Estatus</th>
                        <!-- <th>Acciones</th> -->
                    </tr>
                </thead>
                <?php
                    // if ($dia_reg == 1  || $dia_reg == 2 ) { 
                    foreach ($participantes_inactivos as $key => $value) { 
                    ?>
                <tbody>
                <tr>
                        <td><?= $value['idusuario']; ?></td>
                        <td><?= $value['dt_correo']; ?></td>
                        <td>
                        <?php if( $value['dt_dia'] == 2 && ($value['dt_status'] == 1  )) { 
                             ?>
                                <form action="includes/activa_dia.php" method="POST">
                                <input type="text" id="idusuario" name="idusuario" value="<?= $value['idusuario']; ?>" hidden>
                                    <input type="text" i="dtcorreo" name="dtcorreo" value="<?= $value['dt_correo']; ?>" hidden>
                                    <input type="text" id="dtstatus" name="dtstatus" value="<?= $value['dt_status']; ?>" hidden>
                                        <!-- Se define el dia que se quiere activar -->
                                        <?php $dia1 = $value['dt_dia']-1 ?>
                                        <input type="text" id="dia" name="dia" value="<?= $dia1; ?>" hidden>
                                        <button type="submit" class="btn btn-success btn-sm">Activar Día <?php echo $dia1; ?></button>
                                <!-- <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal<?= $value['id_usuario']; ?>">Ver detalles</button> -->
                            </form>
                                
                             <?php
                        } else{  ?>
                            INACTIVO
                        <?php
                        }
                        ?>
                        </td>
                        <td>
                        <?php if( $value['dt_dia'] == 1 && ($value['dt_status'] == 1  )) { 
                             ?>
                                <form action="includes/activa_dia.php" method="POST">
                                    <input type="text" id="idusuario" name="idusuario" value="<?= $value['idusuario']; ?>" hidden>
                                    <input type="text" i="dtcorreo" name="dtcorreo" value="<?= $value['dt_correo']; ?>" hidden>
                                    <input type="text" id="dtstatus" name="dtstatus" value="<?= $value['dt_status']; ?>" hidden>
                                    <!-- Se define el dia que se quiere activar -->
                                    <?php $dia2 = $value['dt_dia']+1 ?>
                                    <input type="text" id="dia" name="dia" value="<?= $dia2; ?>" hidden>
                                    <button type="submit" class="btn btn-success btn-sm">Activar Día <?php echo $dia2; ?></button>
                                <!-- <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal<?= $value['id_usuario']; ?>">Ver detalles</button> -->
                            </form>
                                
                             <?php
                        } else{  ?>
                            INACTIVO
                        <?php
                        }
                        ?>
                        </td>

                        <td>
                            <form action="includes/activa_dia.php" method="POST">
                                    <input type="text" id="idusuario" name="idusuario" value="<?= $value['idusuario']; ?>" hidden>
                                    <input type="text" i="dtcorreo" name="dtcorreo" value="<?= $value['dt_correo']; ?>" hidden>
                                    <input type="text" id="dtstatus" name="dtstatus" value="<?= $value['dt_status']; ?>" hidden>
                                    <?php $dia2 = $value['dt_dia']+1 ?>
                                    <input type="text" id="dia" name="dia" value="<?= $dia2; ?>" hidden>
                                    <button type="submit" class="btn btn-success btn-sm">Activar Sección </button>
                                <!-- <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal<?= $value['id_usuario']; ?>">Ver detalles</button> -->
                            </form>
                        </td>

                    </tr>
                        
                </tbody>
                <?php }  
                    // } ?>
            </table>
        </div>
    </div>
</div>


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
