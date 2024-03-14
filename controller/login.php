<?php
error_reporting(E_ALL);
session_start();
require_once('../databases_registro.php');

if ($_POST) 
{
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $user = get_user_acces_asistencias($correo);

    if (!$user) {
        header('Location: ../login.php?error=invalid-user');
        exit();
    }

    if ($user['dt_password'] != $password) {
        header('Location: ../login.php?error=invalid-password');
        exit();
    }

    $_SESSION["id_user"] = $user['id_usuario'];
    $_SESSION["tp_usuario"] = $user['tp_usuario'];
    $_SESSION["dt_dia"] = $user['dt_dia'];
    $_SESSION["region"] = $user['dt_region'];
    $_SESSION["nom_region"] = $user['dt_nombre_region'];

    switch ($user['tp_usuario'] ) 
    {
        case 2:
            header('Location: ../report_region.php');  // ve reporte por region y esta el registro express
            exit();
        case 3:
            header('Location: ../report.php');
            exit();
        case 4:
            header("Location: ../report_2024.php");  // es la sesion para sep 
            break;
        case 5:
            if ($user['dt_status'] == 1) {
                header('Location: ../asistencia.php');  // aqui se valida las asistencias 
                exit();
            } else {
                header('Location: ../login.php?error=invalid-user-asistencia');
                exit();
            }
        case 6:
            header('Location: ../habilita_region.php'); // sesion, es para cambiar los dias 
            exit();
        case 7:
            // Redireccion constancias
    header('Location: ../contanciasForos2023/index.php'); // con este generamos constancias manuales, con la informacion en la base datos
            exit();

        default:
            header('Location: ../login.php?error=invalid-user');
            exit();
    }
}
?>
