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
  $sql = "SELECT * FROM usuario 
          WHERE dt_email = '{$correo}'";
  $result = $mysqli->query($sql);
  return $result->fetch_assoc();
}


function update_descarga($id)
{
  global $mysqli;
  $sql = "UPDATE `usuario` SET `tp_descarga`=1 WHERE id_usuario='{$id}' ";
  $mysqli->query($sql); 
}


?>