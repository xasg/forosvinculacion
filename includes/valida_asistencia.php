<?php
require ('../controller/conexion.php');
require ('get_Dias.php');
if ($_POST) {
    $id_usuario = $_POST['idusuario'];
    $id_reg = $_POST['idregion'];
    // $fecha = date("m-d");
    $fecha = '03-22';
    // $fecha = '05-16';
    $dia = obtenerDia($id_reg,$fecha);
    switch ($id_reg) {
        case '01':
        case '02':
        case '03':
        case '04':
        case '05':
        case '06':
            if ($dia == 1 || $dia == 2) {
                insert_fecha($id_usuario, $id_reg,$dia);
                header('Location: ../asistencia2.php?asistencia');
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

    $query_as = "SELECT * FROM asistencias WHERE id_usuario = '{$id_usuario}' AND dt_region = '{$id_reg}'";
    $res = $mysqli->query($query_as);
    $busqueda = $res->fetch_assoc();
    if ($busqueda != 0 && $dia2 == 'si') {
        // No hagas nada si ya existe una asistencia para ese usuario y región en el día 2
    } else {
        $asistencia = isset($_POST['asistencia'.$id_usuario]) ? $_POST['asistencia'.$id_usuario] : '';
        $query = "INSERT INTO asistencias (id_usuario, dt_region,dia) VALUES ('{$id_usuario}', '{$id_reg}','{$dia}')";
        $mysqli->query($query);
    }
}
?>
