<?php
include '../controller/conexion.php';
if (!empty($_POST['limite_nuevo'])) {
    $limite = isset($_POST['limite_nuevo']) ? $_POST['limite_nuevo'] : '';
    $region = isset($_POST['id_region_actual']) ? $_POST['id_region_actual'] : '';
    // echo $limite.' --- '.$region;
    
    global $mysqli;
    $sql = "UPDATE cat_region SET limite = '{$limite}' where id_cat_region = '{$region}' ";
    if ($mysqli->query($sql)) {
        header('Location:../report_2024.php?actualizado');    
    }
}else{
    header('Location:../report_2024.php?invalido');
}