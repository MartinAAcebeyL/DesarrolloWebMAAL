<?php
    $conexion = new mysqli('localhost','root','','biblioteca');
    if($conexion->connect_error)
        die('conexion fallida'.$conexion->connect_error);
?>