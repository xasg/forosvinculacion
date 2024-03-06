
<?php
error_reporting(E_ALL);
session_start();
require_once('../databases_registro.php');

if ($_POST) 
{
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $user = get_user_acces_asistencias($correo);

    echo "El correo es ".$correo." y la contraseña es ".$user['dt_password']." y su región es ".$user['dt_region'];

    if ($user && $user['dt_password'] == $password) 
    {
        $_SESSION["id_user"] = $user['id_usuario'];
        $_SESSION["dt_dia"] = $user['dt_dia'];
        $_SESSION["region"] = $user['dt_region'];
        $_SESSION["nom_region"] = $user['dt_nombre_region'];

        switch ($user['tp_usuario'] ) 
        {
            case 2:
                echo "El usuario es del tipo 2";
                header('Location: ../report_region.php');
                break;
            case 3:
                echo "El usuario es del tipo 3";
                // header('Location: ../report.php');
                break;
            case 4:
                echo "El usuario es del tipo 4";
                // header('Location: ../asistencia.php');
                // Código para el tipo 4
                break;
            case 5:
                echo "El usuario es del tipo 5";
                // if ($user['dt_status'] == 1) {
                    header('Location: ../asistencia.php');
                // } else {
                //     header('Location: ../login.php?error=invalid-user-asistencia');
                // }
                
                
                // Código para el tipo 4
                break;
            default:
                header('Location: ../login.php?error=invalid-user');
                exit();
        }
    } 
}
?>