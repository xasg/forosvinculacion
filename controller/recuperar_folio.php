<?php

require_once('../databases_registro.php');
if ($_POST) 
{
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
    $region = isset($_POST['id_region']) ? $_POST['id_region'] : '';
    global $mysqli;

    $sql = "SELECT * FROM usuario WHERE dt_email = '{$correo}' AND dt_region = '{$region}'";

    $res = $mysqli->query($sql);
    $datos = $res->fetch_assoc();
    $folio = $datos['id_usuario'];

    header('Location: ../recuperar_folio.php?numfolio='.$folio.'&idregion='.$region.''); 
}
