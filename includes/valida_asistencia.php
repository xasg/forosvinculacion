<?php
require ('../controller/conexion.php');
// require ('get_Dias.php');
session_start();
if ($_POST) {
    
    // $dia = $_SESSION['dt_dia'] ;
    $dia = intval($_SESSION['dt_dia']);

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
                sleep(1); 
                if ($dia == 2) {
                    global $mysqli;
                    $sql = "SELECT *,asistencias.id_usuario as idusuario, asistencias.dt_region as region, count(asistencias.id_usuario) as num_asistencias  FROM asistencias
                    LEFT JOIN usuario ON(usuario.id_usuario = asistencias.id_usuario)
                    WHERE  asistencias.dt_region = '{$id_reg}' AND asistencias.id_usuario = '{$id_usuario}' group by asistencias.id_usuario,asistencias.dt_region";
                    $result = $mysqli->query($sql);
                    $rows = $result->fetch_assoc();
                    $numero_de_asistencias = $rows['num_asistencias'];

                    print($numero_de_asistencias);
                    // die();
                    if ($numero_de_asistencias == 2) {
                        require_once('../constanciasForos2024/constancias.php');
                        // print("si entro");
                    }
                    
                // print("kill del proces dia 2 no entro");
                // die();
                }

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
