<?php 
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;
   session_start(); 
   include_once('databases_registro.php');
   require 'PHPMailer/src/PHPMailer.php';
   require 'PHPMailer/src/SMTP.php';
   require 'PHPMailer/src/Exception.php';  
   if( $_POST )
   { 
   
    /////////////////////////////////////////////////////////////////
   // Obtener los valores del formulario
   $registro_manual = isset($_POST['registro_manual']) ? $_POST['registro_manual'] : '';
   $region = isset($_POST['region']) ? $_POST['region'] : '';
   $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
   $apaterno = isset($_POST['apaterno']) ? $_POST['apaterno'] : '';
   $amaterno = isset($_POST['amaterno']) ? $_POST['amaterno'] : '';
   $nom_org = isset($_POST['nom_org']) ? $_POST['nom_org'] : '';
   $otro_cargo = isset($_POST['otro_cargo']) ? $_POST['otro_cargo'] : '';
   $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
   $tel_movil = isset($_POST['tel_movil']) ? $_POST['tel_movil'] : '';

  // Puedes utilizar los valores como desees, por ejemplo, imprimirlos
  echo "Registro Manual: " . $registro_manual . "<br>";
  echo "Region: " . $region . "<br>";
  echo "Nombre: " . $nombre . "<br>";
  echo "Primer Apellido: " . $apaterno . "<br>";
  echo "Segundo Apellido: " . $amaterno . "<br>";
  echo "Nombre de la Organización: " . $nom_org . "<br>";
  echo "Cargo en la Organización: " . $otro_cargo . "<br>";
  echo "Correo Electrónico: " . $correo . "<br>";
  echo "Teléfono Móvil: " . $tel_movil . "<br>";

  // Luego puedes procesar estos valores según sea necesario en tu script


    if (!empty($region) && !empty($nombre) && !empty($correo)) 
    {
      insert_registro_express($region, $nombre, $apaterno, $amaterno, $nom_org, $otro_cargo, $correo, $tel_movil,$registro_manual);
      
      echo "entro la funcion ";
      //header("Location: index.php");
      exit;
    
    } 
    else 
    {
      // Manejar el caso donde faltan datos obligatorios
      echo "Error: Faltan datos obligatorios.";
  
    }
    

     /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  }
  

   ?>