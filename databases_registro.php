<?php
require_once('controller/conexion.php');

/* 
se comenta validacion en databases
if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
  session_start();
  $correo = $_POST['correo'];
	$contraseña = $_POST['password'];
  //echo " el password es".$_POST['password'];;
	// $sql = "SELECT * FROM usuario WHERE dt_email = '$correo' AND dt_password = '$contraseña'";		
	$sql = "SELECT * FROM encargado WHERE dt_email = '$correo' AND dt_password = '$contraseña'";		
	$result = $mysqli->query($sql);
	if ($result->num_rows > 0) 
		{			
			// Obtener la primera fila de resultados
			$row = $result->fetch_assoc();
			// Guardar el valor de la columna "tp_usuario" en la variable $tipoUsuario
			$tipoUsuario = $row["tp_usuario"];
			//echo "existe el usuario y es del tipo ". $tipoUsuario;
			if($tipoUsuario == 2)  // solo los usuarios del tipo 2 pueden acceder al reporte 
			{
				echo "<script language='javascript'>
					window.location.replace('report.php');
				</script>";
			}
			else
			{
				echo "<script language='javascript'>
					window.location.replace('login.php');
				</script>";
        //header('login.php?error=empty-password-invalid');
			}
		} 
		else 
		  {
			  // Usuario inválido, enviar respuesta al cliente.			
			  header('login.php?error=empty-password-invalid');  
      /*  echo "<script language='javascript'>
					window.location.replace('login.php');
				</script>";    */
		  // }      
// }  

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


function insert_registro($apaterno, $amaterno, $nombre, $email, $tel_ins, $ext, $tel_movil, $region, $entidad, $organizacion, $nom_org, $nom_org2, $cargo, $cargo2, $otro_cargo, $otro_cargo2, $educacion_dual_dt,$servicio_social_comunitario_dt,$economia_social_solidaria_dt,$mesa1, $mesa2, $mesa3, $mesa4, $mesa5, $comentario)
{
global $mysqli;
$sql="INSERT INTO usuario(id_usuario, dt_apaterno, dt_amaterno, dt_nombre, dt_email, dt_tel_ins, dt_ext, dt_tel_movil, dt_region, dt_entidad, dt_organizacion, dt_nom_org, dt_nom_org2, dt_cargo, dt_cargo2, dt_otro_cargo, dt_otro_cargo2, dt_educacion_dual, dt_servicio_social_comunitario,dt_economia_social_solidaria ,dt_mesa1, dt_mesa2, dt_mesa3, dt_mesa4, dt_mesa5, dt_comentario) VALUES (null, '{$apaterno}', '{$amaterno}', '{$nombre}', '{$email}', '{$tel_ins}', '{$ext}', '{$tel_movil}', '{$region}', '{$entidad}', '{$organizacion}', '{$nom_org}', '{$nom_org2}', '{$cargo}', '{$cargo2}' , '{$otro_cargo}', '{$otro_cargo2}', '{$educacion_dual_dt}','{$servicio_social_comunitario_dt}','{$economia_social_solidaria_dt}', 
'{$mesa1}', '{$mesa2}', '{$mesa3}', '{$mesa4}','{$mesa5}', '{$comentario}')";
$mysqli->query($sql);
}



function acces_registro($email)
{
  global $mysqli;
  $sql = "SELECT * FROM usuario
  LEFT JOIN cat_region ON(cat_region.id_cat_region=usuario.dt_region)
  WHERE dt_email = '{$email}'";
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

// Funcion para obtener el resumen de participantes por region
function get_region_users()
{
  global $mysqli;
  $sql = "SELECT dt_region, COUNT(*) AS users FROM usuario GROUP BY dt_region;";
  $result = $mysqli->query($sql);
  return $mysqli->query($sql); 
}


function run_registros_tall($reg)
{
  global $mysqli;
  $sql ="SELECT * FROM usuario
          LEFT JOIN cat_region ON(cat_region.id_cat_region=usuario.dt_region)
          WHERE cat_region.id_region = {$reg}";
  //print($sql);
  return $mysqli->query($sql);    // aqui se comento este doble
 // return $result->fetch_assoc();
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


function update_user($id)
{
  global $mysqli;
  $sql = "UPDATE usuario  SET tp_estatus=1 WHERE id_usuario ='{$id}' ";
  $mysqli->query($sql);
}




?>