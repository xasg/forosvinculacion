<?php
require_once('../controller/conec.php');
$mysqli = new mysqli($servername, $username, $password, $dbname);
$result ='';
if( $mysqli->connect_errno )
{
  echo '';
  exit;
}


function get_user_acces($correo)
{
  global $mysqli;
  $sql = "SELECT id_usuario,dt_email FROM usuario 
          WHERE dt_email = '{$correo}'";
  $result = $mysqli->query($sql);
  return $result->fetch_assoc();
}


?>