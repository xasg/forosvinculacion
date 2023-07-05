<?php
//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
<<<<<<< HEAD
	$mysqli = new mysqli("localhost","dual","WM2ODrcPMgxzG5nM","forosvinculacion2023"); 
=======
	$mysqli = new mysqli("localhost","root","","forosvinculacion2023"); 
>>>>>>> cf3f7ca00445dc3c38f4580e6123952892dc4d96
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>
