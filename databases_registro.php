<?php

require_once('controller/conexion.php');

function view_region()
{
  global $mysqli;
  $sql ='SELECT * FROM cat_region WHERE tp_status=1';
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}

function get_region($region)
{
  global $mysqli;
  $query = "SELECT dt_nombre_region as nombre FROM cat_region WHERE id_cat_region = '{$region}' ";
  $res =$mysqli->query($query);
  return $res->fetch_assoc();
}

function view_entidad()
{
  global $mysqli;
  $sql ='SELECT * FROM cat_entidad';
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}


function insert_registro($apaterno, $amaterno, $nombre, $email, $tel_ins, $ext, $tel_movil, $region, $entidad, $organizacion, $nom_org, $nom_org2, $cargo, $cargo2, $otro_cargo, $otro_cargo2, $mesa1, $catering)
{
global $mysqli;
$sql="INSERT INTO usuario(id_usuario, dt_apaterno, dt_amaterno, dt_nombre, dt_email, dt_tel_ins, 
dt_ext, dt_tel_movil, dt_region, dt_entidad, dt_organizacion, dt_nom_org, dt_nom_org2, dt_cargo, 
dt_cargo2, dt_otro_cargo, dt_otro_cargo2, dt_mesa1, dt_catering) VALUES (null, '{$apaterno}', '{$amaterno}', '{$nombre}', '{$email}', '{$tel_ins}', '{$ext}', '{$tel_movil}', '{$region}', '{$entidad}', '{$organizacion}', '{$nom_org}', '{$nom_org2}', '{$cargo}', '{$cargo2}' , '{$otro_cargo}', '{$otro_cargo2}', '{$mesa1}', '{$catering}')";
$mysqli->query($sql);
}


function acces_registro($email,$region)
{
  global $mysqli;
  $sql = "SELECT * FROM usuario
  LEFT JOIN cat_region ON(cat_region.id_cat_region=usuario.dt_region)
  WHERE dt_email = '{$email}' AND usuario.dt_region ='{$region}'";
  $result = $mysqli->query($sql);
  return $result->fetch_assoc();
}
// Funci[on para obtener el listado de participantes por region
function run_participante($id)
{
  global $mysqli;
  $sql = "SELECT * FROM usuario
          LEFT JOIN cat_region ON(cat_region.id_cat_region=usuario.dt_region)
          WHERE id_usuario = '{$id}'";
  $result = $mysqli->query($sql);
   return $result->fetch_assoc();
}
// FUNCION PARA OBTENER PARTICIPANTES POR REGION - LISTA DE ASISTENCIA
function run_participante_region($id, $region,$dia)
{
    global $mysqli;
    if ($dia == 1) {
    $sql = "SELECT *,usuario.id_usuario as idusuario,usuario.dt_region as region FROM usuario
            LEFT JOIN cat_region ON(cat_region.id_cat_region=usuario.dt_region)
            LEFT JOIN asistencias ON(usuario.id_usuario = asistencias.id_usuario)
            WHERE usuario.dt_region = '{$region}' AND usuario.id_usuario <> '{$id}' AND  asistencias.dt_fecha IS NULL ";
    $result = $mysqli->query($sql);
    return $result;

    }elseif ($dia == 2) {
      global $mysqli;
      $fech = '2024-03-06';
      $sql = "SELECT *, usuario.id_usuario as idusuario, usuario.dt_region as region FROM usuario
      LEFT JOIN cat_region ON (cat_region.id_cat_region=usuario.dt_region)
      LEFT JOIN asistencias ON (usuario.id_usuario = asistencias.id_usuario)
      WHERE usuario.dt_region = '{$region}' AND usuario.id_usuario <> '{$id}' AND (asistencias.dt_fecha IS NULL  OR (SELECT COUNT(asistencias.id_usuario) FROM asistencias WHERE usuario.id_usuario = asistencias.id_usuario AND dia = 2  ) < 1  )";
      $result = $mysqli->query($sql);
      return $result;
      
    }

}

function run_participante_region_d2($id, $region,$dia)
{
    global $mysqli;
    // $fech = date("d")  ;
    $sql = "SELECT *,asistencias.id_usuario as idusuario, asistencias.dt_region as region, count(asistencias.id_usuario) as num_asistencias  FROM asistencias
            LEFT JOIN usuario ON(usuario.id_usuario = asistencias.id_usuario)
             WHERE asistencias.dia = '{$dia}' AND asistencias.dt_region = '{$region}' AND asistencias.id_usuario <> '{$id}' group by asistencias.id_usuario,asistencias.dt_region";
            // -- WHERE  asistencias.dt_region = '{$region}' AND asistencias.id_usuario <> '{$id}' group by asistencias.id_usuario,asistencias.dt_region";
    $result = $mysqli->query($sql);
    return $result;
}

// fUNCION PARA OBTENER EL ID DE REGION DEPENDIENDO DEL CORREO
function acces_user($id)
{
  global $mysqli;
  $sql = "SELECT * FROM usuario
          LEFT JOIN cat_region ON(cat_region.id_cat_region=usuario.dt_region)
          WHERE id_usuario = '{$id}' AND tp_usuario != 1 ";
  $result = $mysqli->query($sql);
   return $result->fetch_assoc();
}
function acces_user_asistencia($id)
{
  global $mysqli;
  $sql = "SELECT * FROM usuario_asistencia
          LEFT JOIN cat_region ON(cat_region.id_cat_region=usuario_asistencia.dt_region)
          WHERE id_usuario = '{$id}' ";
  $result = $mysqli->query($sql);
   return $result->fetch_assoc();
}
// Funcion para obtener el resumen de participantes por region
function get_region_users()
{
  global $mysqli;
  // $sql = "SELECT dt_region, COUNT(*) AS users FROM usuario where tp_usuario = 1 GROUP BY dt_region;"; // Se modifico la consulta para mostrar solo a los usuarios de tipo 1 y no incluir admins
  $sql = "SELECT dt_region, COUNT(*) AS users FROM usuario where tp_usuario = 1 AND dt_email NOT IN('AMDELATORRE@FESE.MX','DIANA.SANTIAGO@ANUIES.MX','NANCY.HUERTA@NUBE.SEP.GOB.M','NANCY.HUERTAE@GMAIL.COM','NANCY_HUERTAE@YAHOO.COM.MX','NANCY.HUERTA@GMAIL.COM','NANCY_HUERTA@YAHOO.COM.MX','KATIA.AGUILAQ@NUBE.SEP.GOB.MX')GROUP BY dt_region;"; // Se modifico la consulta para mostrar solo a los usuarios de tipo 1 y no incluir admins 
  $result = $mysqli->query($sql);
  return $mysqli->query($sql); 
}


// Funcion para obtener el resumen de participantes validados por reigion
function get_region_acept_users($region)
{
  global $mysqli;
  // $sql = "SELECT dt_region, SUM(tp_estatus_conteo) AS aceptados, COUNT(*) AS users FROM usuario where dt_region = '{$region}' GROUP BY dt_region;";
  $sql = "SELECT dt_region, SUM(tp_estatus_conteo) AS aceptados, COUNT(*) AS users FROM usuario where dt_region = {$region}  AND dt_email NOT IN('AMDELATORRE@FESE.MX','DIANA.SANTIAGO@ANUIES.MX','NANCY.HUERTA@NUBE.SEP.GOB.M','NANCY.HUERTAE@GMAIL.COM','NANCY_HUERTAE@YAHOO.COM.MX','NANCY.HUERTA@GMAIL.COM','NANCY_HUERTA@YAHOO.COM.MX','KATIA.AGUILAQ@NUBE.SEP.GOB.MX')GROUP BY dt_region;"; //Se agrego centencia a la query que no va a mostrar a estos usuarios, sin tener que modificar la base de datos de produccion
  $result = $mysqli->query($sql);
  return $mysqli->query($sql); 
  # code...
}

function run_registros_tall($reg)
{
  global $mysqli;
  // ---------------------------------------------------------------------------------Query Modificada, para Ocultarla de la vista a los Admin y correos indicados 
  $sql ="SELECT * FROM usuario
          LEFT JOIN cat_region ON(cat_region.id_cat_region=usuario.dt_region)
          WHERE cat_region.id_region = '{$reg}' AND tp_usuario=1 AND dt_email NOT IN('AMDELATORRE@FESE.MX','DIANA.SANTIAGO@ANUIES.MX','NANCY.HUERTA@NUBE.SEP.GOB.M','NANCY.HUERTAE@GMAIL.COM','NANCY_HUERTAE@YAHOO.COM.MX','NANCY.HUERTA@GMAIL.COM','NANCY_HUERTA@YAHOO.COM.MX','KATIA.AGUILAQ@NUBE.SEP.GOB.MX')"; 
  // ---------------------------------------------------------------------------------Query Modificada, para Ocultarla de la vista a los Admin y correos indicados
  return $mysqli->query($sql);   
}


function run_registros_region($reg)
{
  global $mysqli;
  
  $sql =" SELECT `id_usuario`, `dt_nombre`,`dt_email`,`dt_nom_org`
  FROM `usuario` 
  WHERE dt_region = '{$reg}' "; 


/*if ($mysqli->query($sql) === TRUE) 
    {
        echo "Consulta ejecutada con éxito";
    } else 
    {
        
       // echo "Error al ejecutar la consulta: " . $mysqli->error;
       echo "la region es  " . $reg;
    }*/
// ---------------------------------------------------------------------------------Query Modificada, para Ocultarla de la vista a los Admin y correos indicados
  return $mysqli->query($sql);   

}
// Funcion solo para aceptados por region
function run_registros_tall_acept($reg){
  global $mysqli;
  $sql ="SELECT * FROM usuario
          LEFT JOIN cat_region ON(cat_region.id_cat_region=usuario.dt_region)
          WHERE cat_region.id_region = '{$reg}' AND tp_usuario=1 AND tp_estatus_conteo=1";
  return $mysqli->query($sql);   
}


function run_asistencia_resumen()
{
  global $mysqli;
  $sql ='SELECT cat_region.dt_nombre_region, COUNT(*) as numero FROM `usuario`
LEFT JOIN cat_region ON(usuario.dt_region=cat_region.id_cat_region)
GROUP BY `dt_region`';
  return $mysqli->query($sql);  
}

function update_user($id, $validacion, $estatus_validacion)
{
  global $mysqli;
  $sql = "UPDATE usuario SET tp_estatus_conteo='{$estatus_validacion}',tp_estatus='{$validacion}'  WHERE id_usuario ='{$id}' ";
  $mysqli->query($sql);
}

function get_user_acces($correo)
{
  global $mysqli;
  $sql = "SELECT * FROM usuario 
  LEFT JOIN cat_region ON(usuario.dt_region=cat_region.id_cat_region)
  WHERE dt_email = '{$correo}'";
  $result = $mysqli->query($sql);
  return $result->fetch_assoc();
}
// Funcion inicio de sesion asistencias
function get_user_acces_asistencias($correo)
{
  global $mysqli;
  $sql = "SELECT * FROM usuario_asistencia 
  LEFT JOIN cat_region ON(usuario_asistencia.dt_region=cat_region.id_cat_region)
  WHERE dt_correo = '{$correo}' order by dt_status DESC limit 1 ";
  $result = $mysqli->query($sql);
  return $result->fetch_assoc();
}


?>