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
    $_SESSION["dt_dia"] = $user['dt_dia'];
    $_SESSION["region"] = $user['dt_region'];
    $_SESSION["nom_region"] = $user['dt_nombre_region'];

    switch ($user['tp_usuario'] ) 
    {
        case 2:
            header('Location: ../report_region.php');
            exit();
        case 3:
            header('Location: ../report.php');
            exit();
        case 4:
            // Código para el tipo 4
            break;
        case 5:
            if ($user['dt_status'] == 1) {
                header('Location: ../asistencia.php');
                exit();
            } else {
                header('Location: ../login.php?error=invalid-user-asistencia');
                exit();
            }
        default:
            header('Location: ../login.php?error=invalid-user');
            exit();
    }
}
?>
