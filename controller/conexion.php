<?php
include_once('config.php'); 
//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	$mysqli = new mysqli($servername,$username,$password,$dbname); 	
        if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	date_default_timezone_set('America/Mexico_City');
?>