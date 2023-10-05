<?php
require_once('controller/conec.php');
$mysqli = new mysqli($servername, $username, $password, $dbname);
$result ='';
if( $mysqli->connect_errno)
{
  echo '';
  exit;
}

function run_participante($id, $region)
{
  global $mysqli;
  $sql = "SELECT * FROM usuario_constancia
          LEFT JOIN cat_region ON(cat_region.id_cat_region=usuario_constancia.dt_region)
          WHERE id_usuario = '{$id}' AND dt_region = '{$region}'";
  $result = $mysqli->query($sql);
   return $result->fetch_assoc();
}




function run_participantes()
{
  global $mysqli;
  $sql ='SELECT * FROM usuario_constancia
          LEFT JOIN cat_region ON(cat_region.id_cat_region=usuario_constancia.dt_region)';
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}



function update_user($id, $nombre, $apaterno, $amaterno, $email)
{
  global $mysqli;
  $sql = "UPDATE usuario_constancia SET dt_nombre = '{$nombre}', dt_apaterno = '{$apaterno}', dt_amaterno = '{$amaterno}', dt_email = '{$email}' WHERE id_usuario ='{$id}' ";
  $mysqli->query($sql); 
}



function insert_user($nombre, $apaterno, $amaterno, $email, $region, $tp_usuario)
{
global $mysqli;
$sql="INSERT INTO usuario_constancia(id_usuario, dt_nombre, dt_apaterno, dt_amaterno, dt_email, dt_region, tp_usuario) VALUES (null, '{$nombre}', '{$apaterno}', '{$amaterno}', '{$email}' , '{$region}', '{$tp_usuario}')";
$mysqli->query($sql);
}

function update_status_constancia($email)  //  esta funcion se usa para poder cambiar el valor de status_contancia a 1, esto indica que ya genero su constancia 
{ global $mysqli;
  $sql = "UPDATE forosvinculacion2023.usuario_constancia SET status_constancia = '1' WHERE dt_email = '" . $email . "'  ";
  $mysqli->query($sql);
}
?>