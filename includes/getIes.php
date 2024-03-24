<?php
	// require ('../controller/conexion.php');
	// mysqli_set_charset( $mysqli, 'utf8');	
	// $id_entidad = $_POST['id_cat_entidad'];	
	// $queryM = "SELECT id_cat_ies, dt_nombre_ies FROM cat_ies WHERE id_cat_entidad = '$id_entidad' ORDER BY dt_nombre_ies";
	// $resultadoM = $mysqli->query($queryM);
	
	// $html= "<option value=''>Seleccionar IES</option>";
	
	// while($rowM = $resultadoM->fetch_assoc())
	// {
	// 	$html.= "<option value='".$rowM['dt_nombre_ies']."'>".$rowM['dt_nombre_ies']."</option>";
	// }
	
	// echo $html;

    require ('../controller/conexion.php');
    mysqli_set_charset( $mysqli, 'utf8');
    $id_entidad = $_POST['id_cat_entidad'];
    $queryM = "SELECT id_cat_ies, dt_nombre_ies FROM cat_ies WHERE id_cat_entidad = '$id_entidad' ORDER BY dt_nombre_ies";
    $resultadoM = $mysqli->query($queryM);

    $html= "<option value='' selected>Selecciona una IES</option>"; // Opción adicional al principio
    $html.= "<option value='OTRA'>Otra IES</option>"; // Opción adicional al principio

    while($rowM = $resultadoM->fetch_assoc())
    {
        $html.= "<option value='".$rowM['dt_nombre_ies']."'>".$rowM['dt_nombre_ies']."</option>";
    }

    echo $html;
?>
