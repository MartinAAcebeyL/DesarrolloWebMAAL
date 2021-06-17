<?php
    include('conexion.php');
    $producto = $_GET['producto'];
    $precio = $_GET['precio'];
    $descripcion = $_GET['descripcion'];

    $sql = "insert into productos(producto, descripcion, precio) 
    values('$producto', '$descripcion', $precio)";
    $query = mysqli_query($conexion,$sql);

    mysqli_close($conexion);
?>