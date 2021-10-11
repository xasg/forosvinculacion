<?php
require_once('conec.php');
$mysqli = new mysqli($servername, $username, $password, $dbname);
$result ='establecido';
if( $mysqli->connect_errno )
{
  echo 'error';
  exit;
}


function get_user_acces($correo)
{
  global $mysqli;
  $sql = "SELECT id_usuario,dt_email, tp_usuario FROM usuario 
          WHERE dt_email = '{$correo}'";
  $result = $mysqli->query($sql);
  return $result->fetch_assoc();
}

function insertlog($id)
{
global $mysqli;
$sql="INSERT INTO log_check(id_log, id_usuario) VALUES (null, '{$id}')";
$mysqli->query($sql);
}
?>