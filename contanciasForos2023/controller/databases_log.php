<?php
require_once('../../controller/conexion.php');
$mysqli = new mysqli($servername, $username, $password, $dbname);
$result ='establecido';
if( $mysqli->connect_errno )
{
  echo 'error';
  exit;
}


function get_user_acces($correo, $region)
{
  global $mysqli;
  $sql = "SELECT * FROM usuario_constancia 
          WHERE dt_email = '{$correo}' AND  dt_region = '{$region}' ";
  $result = $mysqli->query($sql);
  return $result->fetch_assoc();
}

?>