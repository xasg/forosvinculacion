<?php
// Se agrega pagina logout que desruye la session
session_start();
unset($_SESSION['id_user']);
session_destroy();
echo "<script> window.location ='login.php'; </script>";
?>