<?php
	

	$servername = "localhost";
	$dbname = "forosvinculacion2023";
	$username = "root";
	$password = "";

	//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	$mysqli = new mysqli("localhost","dual","WM2ODrcPMgxzG5nM","forosvinculacion2023"); 	
        if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>
