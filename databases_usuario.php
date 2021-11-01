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
  $sql ='SELECT * FROM cat_region WHERE tp_status=1';
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

function run_dia_1($id)
{
  global $mysqli;
  $sql = "SELECT asistencia.id_usuario, dt_mesa, id_cat_region, cat_mesas.dt_nombre FROM `asistencia` LEFT JOIN cat_mesas ON(asistencia.dt_mesa=cat_mesas.id_cat_mesa) LEFT JOIN usuario ON(usuario.id_usuario=asistencia.id_usuario) WHERE asistencia.`id_usuario`=14 AND cat_mesas.id_cat_region='01'";
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}


function run_registro_dia2($id)
{
  global $mysqli;
  $sql = "SELECT usuario.dt_nombre as nom, usuario.dt_apaterno, usuario.dt_amaterno, cat_mesas.dt_horario, cat_mesas.dt_nombre as mesa, asistencia.dt_tipo_asistente, usuario.dt_participacion FROM `asistencia`
LEFT JOIN cat_mesas ON(asistencia.dt_dia=cat_mesas.id_cat_mesa)
LEFT JOIN usuario ON(usuario.id_usuario=asistencia.id_usuario)
WHERE asistencia.dt_participacion='dia2' AND usuario.id_usuario = '{$id}'";
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}


function run_registro_dia1_ambos($id)
{
  global $mysqli;
  $sql = "SELECT usuario.dt_nombre as nom, usuario.dt_apaterno, usuario.dt_amaterno, cat_mesas.dt_horario, cat_mesas.dt_nombre as mesa, asistencia.dt_tipo_asistente, usuario.dt_participacion FROM `asistencia`
LEFT JOIN cat_mesas ON(asistencia.dt_dia=cat_mesas.id_cat_mesa)
LEFT JOIN usuario ON(usuario.id_usuario=asistencia.id_usuario)
WHERE asistencia.dt_participacion='ambos' AND `dt_dia`<=12 AND usuario.id_usuario = '{$id}'";
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}


function run_registro_dia2_ambos($id)
{
  global $mysqli;
  $sql = "SELECT usuario.dt_nombre as nom, usuario.dt_apaterno, usuario.dt_amaterno, cat_mesas.dt_horario, cat_mesas.dt_nombre as mesa, asistencia.dt_tipo_asistente, usuario.dt_participacion FROM `asistencia`
LEFT JOIN cat_mesas ON(asistencia.dt_dia=cat_mesas.id_cat_mesa)
LEFT JOIN usuario ON(usuario.id_usuario=asistencia.id_usuario)
WHERE asistencia.dt_participacion='ambos' AND `dt_dia`>=13 AND usuario.id_usuario = '{$id}'";
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


function run_registros_tall()
{
  global $mysqli;
  $sql ='SELECT * FROM usuario
          LEFT JOIN cat_region ON(cat_region.id_cat_region=usuario.dt_region)';
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}


function run_asistencia()
{
  global $mysqli;
  $sql ='SELECT usuario.id_usuario, asistencia.id_asistencia, cat_region.dt_nombre_region, usuario.dt_apaterno as paterno, usuario.dt_amaterno as materno, usuario.dt_nombre as nombre, usuario.dt_email, usuario.dt_tel_ins as telefono, usuario.dt_tel_movil as celular, usuario.dt_nom_org, usuario.dt_nom_org2, cat_mesas.dt_nombre as mesa, asistencia.dt_tipo_asistente, asistencia.dt_participacion, cat_mesas.dt_tipo as tipo, cat_entidad.nombre_entidad FROM `asistencia` 
  LEFT JOIN usuario ON(asistencia.id_usuario=usuario.id_usuario) 
  LEFT JOIN cat_mesas ON(cat_mesas.id_cat_mesa=asistencia.dt_dia) 
  LEFT JOIN cat_region ON(cat_region.id_cat_region=usuario.dt_region) 
  LEFT JOIN cat_entidad ON(cat_entidad.id_cat_entidad=usuario.dt_entidad)
  WHERE asistencia.dt_tipo_asistente!="expositor"
  ORDER BY cat_region.id_region';
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}


function run_expositor()
{
  global $mysqli;
  $sql ='SELECT usuario.id_usuario, asistencia.id_asistencia, asistencia.tp_estatus, cat_region.dt_nombre_region, usuario.dt_apaterno as paterno, usuario.dt_amaterno as materno, usuario.dt_nombre as nombre, usuario.dt_email, usuario.dt_tel_ins as telefono, usuario.dt_tel_movil as celular, usuario.dt_nom_org, usuario.dt_nom_org2, cat_mesas.dt_nombre as mesa, asistencia.dt_tipo_asistente, asistencia.dt_participacion, cat_mesas.dt_tipo as tipo, cat_entidad.nombre_entidad,usuario.dt_cargo, usuario.dt_cargo2, usuario.dt_otro_cargo FROM `asistencia` 
  LEFT JOIN usuario ON(asistencia.id_usuario=usuario.id_usuario) 
  LEFT JOIN cat_mesas ON(cat_mesas.id_cat_mesa=asistencia.dt_dia) 
  LEFT JOIN cat_region ON(cat_region.id_cat_region=usuario.dt_region)
  LEFT JOIN cat_entidad ON(cat_entidad.id_cat_entidad=usuario.dt_entidad)
  WHERE asistencia.dt_tipo_asistente="expositor"
  ORDER BY cat_region.id_region';
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}



function run_asistencia_resumen()
{
  global $mysqli;
  $sql ='SELECT cat_region.dt_nombre_region, COUNT(*) as numero FROM `usuario`
LEFT JOIN cat_region ON(usuario.dt_region=cat_region.id_cat_region)
GROUP BY `dt_region`';
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}


function run_dual()
{
  global $mysqli;
  $sql ='SELECT `dt_mesa`,mesas.dt_nombre_mesa, COUNT(*) total FROM `asistencia` LEFT JOIN usuario ON(asistencia.id_usuario=usuario.id_usuario) LEFT JOIN mesas ON(asistencia.dt_mesa=mesas.id_cat_mesa) WHERE usuario.dt_region="01" GROUP BY dt_mesa ORDER BY dt_mesa ASC';
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}


function run_dual_cdmx()
{
  global $mysqli;
  $sql ='SELECT `dt_mesa`,mesas.dt_nombre_mesa, COUNT(*) total FROM `asistencia` LEFT JOIN usuario ON(asistencia.id_usuario=usuario.id_usuario) LEFT JOIN mesas ON(asistencia.dt_mesa=mesas.id_cat_mesa) WHERE usuario.dt_region="02" GROUP BY dt_mesa ORDER BY dt_mesa ASC';
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}


function run_dual_bajio()
{
  global $mysqli;
  $sql ='SELECT `dt_mesa`,mesas.dt_nombre_mesa, COUNT(*) total FROM `asistencia` LEFT JOIN usuario ON(asistencia.id_usuario=usuario.id_usuario) LEFT JOIN mesas ON(asistencia.dt_mesa=mesas.id_cat_mesa) WHERE usuario.dt_region="03" GROUP BY dt_mesa ORDER BY dt_mesa ASC';
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}


function run_dual_frontera()
{
  global $mysqli;
  $sql ='SELECT `dt_mesa`,mesas.dt_nombre_mesa, COUNT(*) total FROM `asistencia` LEFT JOIN usuario ON(asistencia.id_usuario=usuario.id_usuario) LEFT JOIN mesas ON(asistencia.dt_mesa=mesas.id_cat_mesa) WHERE usuario.dt_region="04" GROUP BY dt_mesa ORDER BY dt_mesa ASC';
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}


function run_dual_noroeste()
{
  global $mysqli;
  $sql ='SELECT `dt_mesa`,mesas.dt_nombre_mesa, COUNT(*) total FROM `asistencia` LEFT JOIN usuario ON(asistencia.id_usuario=usuario.id_usuario) LEFT JOIN mesas ON(asistencia.dt_mesa=mesas.id_cat_mesa) WHERE usuario.dt_region="05" GROUP BY dt_mesa ORDER BY dt_mesa ASC';
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}

function emp()
{
  global $mysqli;
  $sql ='SELECT cat_mesas.dt_nombre, COUNT(*) AS num_dual FROM `asistencia` 
LEFT JOIN usuario ON(usuario.id_usuario=asistencia.id_usuario) 
LEFT JOIN cat_region ON(cat_region.id_cat_region=usuario.dt_region) 
LEFT JOIN cat_mesas ON(cat_mesas.id_cat_mesa= asistencia.dt_dia) 
WHERE usuario.dt_region="01" and dt_tipo="emprendimiento" AND `dt_tipo_asistente`="Asistente general" GROUP BY cat_mesas.dt_nombre ORDER BY `id_mesa` asc';
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}


function emp_cdmx()
{
  global $mysqli;
  $sql ='SELECT cat_mesas.dt_nombre, COUNT(*) AS num_dual FROM `asistencia` 
LEFT JOIN usuario ON(usuario.id_usuario=asistencia.id_usuario) 
LEFT JOIN cat_region ON(cat_region.id_cat_region=usuario.dt_region) 
LEFT JOIN cat_mesas ON(cat_mesas.id_cat_mesa= asistencia.dt_dia) 
WHERE usuario.dt_region="02" and dt_tipo="emprendimiento" AND `dt_tipo_asistente`="Asistente general" GROUP BY cat_mesas.dt_nombre ORDER BY `id_mesa` asc';
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}


function emp_bajio()
{
  global $mysqli;
  $sql ='SELECT cat_mesas.dt_nombre, COUNT(*) AS num_dual FROM `asistencia` 
LEFT JOIN usuario ON(usuario.id_usuario=asistencia.id_usuario) 
LEFT JOIN cat_region ON(cat_region.id_cat_region=usuario.dt_region) 
LEFT JOIN cat_mesas ON(cat_mesas.id_cat_mesa= asistencia.dt_dia) 
WHERE usuario.dt_region="03" and dt_tipo="emprendimiento" AND `dt_tipo_asistente`="Asistente general" GROUP BY cat_mesas.dt_nombre ORDER BY `id_mesa` asc';
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}


function emp_frontera()
{
  global $mysqli;
  $sql ='SELECT cat_mesas.dt_nombre, COUNT(*) AS num_dual FROM `asistencia` 
LEFT JOIN usuario ON(usuario.id_usuario=asistencia.id_usuario) 
LEFT JOIN cat_region ON(cat_region.id_cat_region=usuario.dt_region) 
LEFT JOIN cat_mesas ON(cat_mesas.id_cat_mesa= asistencia.dt_dia) 
WHERE usuario.dt_region="04" and dt_tipo="emprendimiento" AND `dt_tipo_asistente`="Asistente general" GROUP BY cat_mesas.dt_nombre ORDER BY `id_mesa` asc';
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}


function emp_noroeste()
{
  global $mysqli;
  $sql ='SELECT cat_mesas.dt_nombre, COUNT(*) AS num_dual FROM `asistencia` 
LEFT JOIN usuario ON(usuario.id_usuario=asistencia.id_usuario) 
LEFT JOIN cat_region ON(cat_region.id_cat_region=usuario.dt_region) 
LEFT JOIN cat_mesas ON(cat_mesas.id_cat_mesa= asistencia.dt_dia) 
WHERE usuario.dt_region="05" and dt_tipo="emprendimiento" AND `dt_tipo_asistente`="Asistente general" GROUP BY cat_mesas.dt_nombre ORDER BY `id_mesa` asc';
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}


function update_validar($id, $valida, $tipo)
{
  global $mysqli;
  $sql = "UPDATE asistencia SET dt_tipo_asistente = '{$tipo}', tp_estatus = '{$valida}' WHERE id_asistencia ='{$id}' ";
  $mysqli->query($sql); 
}




?>