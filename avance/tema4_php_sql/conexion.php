<?php
    $conexion = new mysqli('localhost','root','','bd_tienda1');
    if($conexion->connect_error)
        die('conexion fallida'.$conexion->connect_error);
?>