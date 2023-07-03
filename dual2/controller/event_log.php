<?php
require_once('conec.php');
$mysqli = new mysqli($servername, $username, $password, $dbname);
$result ='establecido';
if( $mysqli->connect_errno )
{
  echo 'error';
  exit;
}


function insertlog($id)
{
global $mysqli;
$sql="INSERT INTO log_check(id_log, id_usuario) VALUES (null, '{$id}')";
$mysqli->query($sql);
}

?>