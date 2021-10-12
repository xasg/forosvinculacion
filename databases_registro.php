<?php
require_once('controller/conec.php');
$mysqli = new mysqli($servername, $username, $password, $dbname);
$result ='';
if( $mysqli->connect_errno)
{
  echo 'Error de conexión';
  exit;
}

function insert_registro($nombre, $apellidos, $email, $movil, $telefono, $institucion, $nombre_ins, $asistente, $informacion)
{
global $mysqli;
$sql="INSERT INTO usuario(id_usuario, dt_apellidos, dt_nombre, dt_email, dt_movil, dt_telefono, dt_tp_institucion, dt_nom_institucion, dt_tp_asistente, dt_informacion) VALUES (null, '{$apellidos}', '{$nombre}', '{$email}', '{$movil}', '{$telefono}', '{$institucion}', '{$nombre_ins}', '{$asistente}', '{$informacion}')";
$mysqli->query($sql); 
}

function acces_registro($email)
{
  global $mysqli;
  $sql = "SELECT * FROM usuario WHERE dt_email = '{$email}'";
  $result = $mysqli->query($sql);
  return $result->fetch_assoc();
}
?>