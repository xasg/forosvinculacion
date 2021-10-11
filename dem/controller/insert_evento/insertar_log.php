<?php
require_once('insertar.php');
session_start();

$id = $_SESSION["id"];
$evento = $_POST["evento"];
$liga = $_POST["liga"];
insertlog($id, $evento);
header("Location: $liga"); 

?>


