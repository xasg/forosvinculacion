<?php
	require ('../controller/conexion.php');
	mysqli_set_charset( $mysqli, 'utf8');	
	$id_region = $_POST['id_cat_region'];
	$total = "SELECT COUNT('mesa') as mesa FROM `asistencia` 
		LEFT JOIN usuario ON(usuario.id_usuario=asistencia.id_usuario)
		LEFT JOIN cat_mesas ON(cat_mesas.id_cat_mesa=asistencia.dt_dia)
		LEFT JOIN cat_region ON(cat_region.id_cat_region=usuario.dt_region)
		WHERE usuario.dt_region=$id_region AND `id_cat_mesa`=09 GROUP BY cat_mesas.dt_nombre";
  	$result = mysqli_query($mysqli, $total);
  	$fila = mysqli_fetch_assoc($result);

	$html= "<p></p>";

	 if($fila['mesa']>=500)
	{
		$html.= "<p style='color:red;'>Mesa 9: llena</p>";
	}else{
		$html.= '<input class="form-check-input" type="radio" name="dual_horario3" value="09">
                 <label class="form-check-label">Mesa 9. Evaluación</label>';
	}

	echo $html;












?>