<?php
require_once('controller/conec.php');
$mysqli = new mysqli($servername, $username, $password, $dbname);
$result ='';
if( $mysqli->connect_errno)
{
  echo '';
  exit;
}


function insert_registro($nombre, $apellidos, $email, $tel_ins, $ext, $tel_movil, $region, $entidad, $organizacion, $nom_org, $nom_org2, $cargo, $cargo2, $otro_cargo, $participacion)
{
global $mysqli;
$sql="INSERT INTO usuario(id_usuario, dt_nombre, dt_apellidos, dt_email, dt_tel_ins, dt_ext, dt_tel_movil, dt_region, dt_entidad, dt_organizacion, dt_nom_org, dt_nom_org2, dt_cargo, dt_cargo2, dt_otro_cargo, dt_participacion) VALUES (null,  '{$nombre}','{$apellidos}', '{$email}', '{$tel_ins}', '{$ext}', '{$tel_movil}', '{$region}', '{$entidad}', '{$organizacion}', '{$nom_org}', '{$nom_org2}', '{$cargo}', '{$cargo2}' , '{$otro_cargo}', '{$participacion}')";
$mysqli->query($sql);
}


function acces_registro($email)
{
  global $mysqli;
  $sql = "SELECT * FROM usuario WHERE dt_email = '{$email}'";
  $result = $mysqli->query($sql);
  return $result->fetch_assoc();
}



function crear_asistencia_dual1($id_user, $dual_horario1, $tipo_horario1, $participacion)
{
global $mysqli;
$sql="INSERT INTO asistencia(id_asistencia, id_usuario, dt_mesa, dt_participacion) VALUES (null, '{$id_user}', '{$dual_horario1}', '{$participacion}')";
$mysqli->query($sql);
}


function crear_asistencia_dual2($id_user, $dual_horario2, $tipo_horario2, $participacion)
{
global $mysqli;
$sql="INSERT INTO asistencia(id_asistencia, id_usuario, dt_mesa, dt_participacion) VALUES (null, '{$id_user}', '{$dual_horario2}', '{$participacion}')";
$mysqli->query($sql);
}

function crear_asistencia_dual3($id_user, $dual_horario3, $tipo_horario3, $participacion)
{
global $mysqli;
$sql="INSERT INTO asistencia(id_asistencia, id_usuario, dt_mesa, dt_participacion) VALUES (null, '{$id_user}', '{$dual_horario3}', '{$tipo_horario3}', '{$participacion}')";
$mysqli->query($sql);
}

function crear_asistencia_emp1($id_user, $emp_horario1, $tipo_emp_horario1, $participacion)
{
global $mysqli;
$sql="INSERT INTO asistencia(id_asistencia, id_usuario, dt_mesa, dt_participacion) VALUES (null, '{$id_user}', '{$emp_horario1}', '{$participacion}')";
$mysqli->query($sql);
}


function crear_asistencia_emp2($id_user, $emp_horario2, $participacion)
{
global $mysqli;
$sql="INSERT INTO asistencia(id_asistencia, id_usuario, dt_mesa, dt_participacion) VALUES (null, '{$id_user}', '{$emp_horario2}', '{$participacion}')";
$mysqli->query($sql);
}

function crear_asistencia_emp3($id_user, $emp_horario3, $tipo_emp_horario3)
{
global $mysqli;
$sql="INSERT INTO asistencia(id_asistencia, id_usuario, dt_mesa, dt_tipo_asistente) VALUES (null, '{$id_user}', '{$emp_horario3}', '{$tipo_emp_horario3}')";
$mysqli->query($sql);
}

?>