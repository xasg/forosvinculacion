<?php
require_once('conexion.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") 
    {
        $correo = $_POST['correo'];
		$contraseña = $_POST['password'];

		$sql = "SELECT * FROM usuario WHERE dt_email = '$correo' AND dt_password = '$contraseña'";
		
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
					window.location.replace('../report.php');
				</script>";
			}
			else
			{
				header('location:../login.php?error=empty-password-invalid');
			}
		} 
		else 
		{
			// Usuario inválido, enviar respuesta al cliente.
			
			header('location:../login.php?error=empty-password-invalid');
      
		  }
		
      
    }    

?>