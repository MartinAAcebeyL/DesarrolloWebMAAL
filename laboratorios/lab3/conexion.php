<?php
    $conexion = new mysqli('localhost','root','','bd_alumnos');
    if($conexion->connect_error)
        die('conexion fallida'.$conexion->connect_error);
?>