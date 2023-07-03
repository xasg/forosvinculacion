<?php
require_once('controller/conec.php');
$mysqli = new mysqli($servername, $username, $password, $dbname);
$result ='';
if( $mysqli->connect_errno)
{
  echo '';
  exit;
}


function view_region()
{
  global $mysqli;
  $sql ='SELECT * FROM cat_region';
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}


function view_entidad()
{
  global $mysqli;
  $sql ='SELECT * FROM cat_entidad';
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}

function view_foro()
{
  global $mysqli;
  $sql ='SELECT * FROM cat_foros';
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}


function run_registro_dia1($id)
{
  global $mysqli;
  $sql = "SELECT usuario.dt_nombre as nom, usuario.dt_apaterno, usuario.dt_amaterno, cat_mesas.dt_horario_inicio, cat_mesas.dt_horario_fin, cat_mesas.dt_liga, cat_mesas.dt_nombre as mesa, asistencia.dt_tipo_asistente, usuario.dt_participacion FROM `asistencia`
LEFT JOIN cat_mesas ON(asistencia.dt_dia=cat_mesas.id_cat_mesa)
LEFT JOIN usuario ON(usuario.id_usuario=asistencia.id_usuario)
WHERE asistencia.dt_participacion='dia1' AND usuario.id_usuario = '{$id}' AND asistencia.dt_dia!='NULL'";
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}


function run_registro_dia2($id)
{
  global $mysqli;
  $sql = "SELECT usuario.dt_nombre as nom, usuario.dt_apaterno, usuario.dt_amaterno, cat_mesas.dt_horario_inicio, cat_mesas.dt_horario_fin, cat_mesas.dt_liga, cat_mesas.dt_nombre as mesa, asistencia.dt_tipo_asistente, usuario.dt_participacion FROM `asistencia`
LEFT JOIN cat_mesas ON(asistencia.dt_dia=cat_mesas.id_cat_mesa)
LEFT JOIN usuario ON(usuario.id_usuario=asistencia.id_usuario)
WHERE asistencia.dt_participacion='dia2' AND usuario.id_usuario = '{$id}' AND asistencia.dt_dia!='NULL'";
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}


function run_registro_dia1_ambos($id)
{
  global $mysqli;
  $sql = "SELECT usuario.dt_nombre as nom, usuario.dt_apaterno, usuario.dt_amaterno, cat_mesas.dt_horario_inicio, cat_mesas.dt_horario_fin, cat_mesas.dt_liga, cat_mesas.dt_nombre as mesa, asistencia.dt_tipo_asistente, usuario.dt_participacion FROM `asistencia`
LEFT JOIN cat_mesas ON(asistencia.dt_dia=cat_mesas.id_cat_mesa)
LEFT JOIN usuario ON(usuario.id_usuario=asistencia.id_usuario)
WHERE asistencia.dt_participacion='ambos' AND `dt_dia`<=12 AND usuario.id_usuario = '{$id}' AND asistencia.dt_dia!='NULL'";
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}


function run_registro_dia2_ambos($id)
{
  global $mysqli;
  $sql = "SELECT usuario.dt_nombre as nom, usuario.dt_apaterno, usuario.dt_amaterno, cat_mesas.dt_horario_inicio, cat_mesas.dt_horario_fin, cat_mesas.dt_liga, cat_mesas.dt_nombre as mesa, asistencia.dt_tipo_asistente, usuario.dt_participacion FROM `asistencia`
LEFT JOIN cat_mesas ON(asistencia.dt_dia=cat_mesas.id_cat_mesa)
LEFT JOIN usuario ON(usuario.id_usuario=asistencia.id_usuario)
WHERE asistencia.dt_participacion='ambos' AND `dt_dia`>=13 AND usuario.id_usuario = '{$id}' AND asistencia.dt_dia!='NULL'";
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}


function run_participante($id)
{
  global $mysqli;
  $sql = "SELECT * FROM usuario
          LEFT JOIN cat_region ON(cat_region.id_cat_region=usuario.dt_region)
          WHERE id_usuario = '{$id}'";
  $result = $mysqli->query($sql);
   return $result->fetch_assoc();
}
?>