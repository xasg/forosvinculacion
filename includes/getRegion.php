<?php
	require ('../controller/conexion.php');
	mysqli_set_charset( $mysqli, 'utf8');	
	$id_region = $_POST['id_cat_region'];	
	$queryM = "SELECT id_cat_entidad, nombre_entidad FROM cat_entidad WHERE id_cat_region = '$id_region' ORDER BY nombre_entidad";
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value=''>Seleccionar la entidad</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['id_cat_entidad']."'>".$rowM['nombre_entidad']."</option>";
	}
	
	echo $html;
?>