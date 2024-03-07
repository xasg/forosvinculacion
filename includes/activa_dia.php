<?php 
require ('../controller/conexion.php');
if ($_POST) {
    $dia = isset($_POST['dia']) ? $_POST['dia'] : ''; 
    $dtstatus = isset($_POST['dtstatus']) ? $_POST['dtstatus'] : ''; 
    $idusr = isset($_POST['idusuario']) ? $_POST['idusuario'] : ''; 
    $correo = isset($_POST['dtcorreo']) ? $_POST['dtcorreo'] : ''; 
    $desactivar = isset($_POST['desactivar']) ? $_POST['desactivar'] : ''; 
    
    if ($desactivar == 'desactivar') {
        desactiva_dias($idusr);
    }else{
        actualiza_dias($correo,$dia,$idusr);
    }

}else{
    header('Location:../habilita_region.php?error-habilita-region');
    exit();
}


function actualiza_dias($correo,$dia,$idusr){
    global $mysqli;
    $query = "UPDATE usuario_asistencia SET dt_status = 1  where dt_correo = '{$correo}' AND dt_dia ='{$dia}'";   
    if ($mysqli->query($query)) {
        $query2 = "UPDATE usuario_asistencia SET dt_status = 0  where id_usuario = '{$idusr}' ";   
        if ($mysqli->query($query2)) {
            header('Location:../habilita_region.php?habilitado');
            exit();
        }
    }
}

function desactiva_dias($idusr){
    global $mysqli;
    $query = "UPDATE usuario_asistencia SET dt_status = 0 WHERE id_usuario = '{$idusr}'";   
    if ($mysqli->query($query)) {      
        header('Location:../habilita_region.php?desactivado');
        exit();
    }
}
