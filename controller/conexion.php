<?php
<<<<<<< HEAD

//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
$mysqli = new mysqli("localhost","dual","WM2ODrcPMgxzG5nM","forosvinculacion2023"); 
=======
	//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	$mysqli = new mysqli("localhost","root","","forosvinculacion2023"); 
>>>>>>> 1363bbac7e1b62885f7ceb09aaf6136146b0a0c7
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>
