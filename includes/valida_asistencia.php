<?php
require ('../controller/conexion.php');
// require ('get_Dias.php');
session_start();
if ($_POST) {
    
    $dia = $_SESSION['dt_dia'] ;
    $id_usuario = $_POST['idusuario'];
    $id_reg = $_POST['idregion'];
    // $fecha = date("m-d");
    // $fecha = '03-22';
    // $fecha = '05-16';
    // $dia = obtenerDia($id_reg,$fecha);
    switch ($id_reg) {
        case '01':
        case '02':
        case '03':
        case '04':
        case '05':
        case '06':
            if ($dia == 1 || $dia == 2) {
                insert_fecha($id_usuario, $id_reg,$dia);
                header('Location: ../asistencia.php?asistencias=validada');
            } else {
                echo 'Fuera de la fecha';
            }
            break;
        default:
            echo 'Región no válida';
            break;
    }
}

function insert_fecha($id_usuario, $id_reg,$dia)
{
    global $mysqli;
        $query = "INSERT INTO asistencias (id_usuario, dt_region,dia) VALUES ('{$id_usuario}', '{$id_reg}','{$dia}')";
        $mysqli->query($query);
}
?>
