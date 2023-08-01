<?php
session_start();
unset($_SESSION['dt_email']);
session_destroy();
echo "<script> window.location ='login.php'; </script>";
?>