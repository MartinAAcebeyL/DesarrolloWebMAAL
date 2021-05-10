<?php
    $conexion = new mysqli('localhost','root','','bd_hotel');
    if($conexion->connect_error)
        die('conexion fallida'.$conexion->connect_error);
?>