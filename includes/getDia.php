<?php
	require ('../controller/conexion.php');
	mysqli_set_charset( $mysqli, 'utf8');	
	$id_region = $_POST['id_cat_region'];	
	$queryM = "SELECT id_cat_region, nombre_dias FROM cat_dias WHERE id_cat_region = '$id_region'";
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value=''>Seleccionar dia</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['id_cat_region']."'>".$rowM['nombre_dias']."</option>";
	}
	
	echo $html;
?>