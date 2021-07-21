<?php
    $conexion = new mysqli('localhost','root','','bd_correos');
    if($conexion->connect_error)
        die('conexion fallida'.$conexion->connect_error);
?>