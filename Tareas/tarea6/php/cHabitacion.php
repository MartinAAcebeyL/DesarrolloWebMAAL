<?php
    include('conexion.php');
    
    $nro = $_POST['nro'];
    $descripcion = $_POST['idhabitacion'];
    $bano = $_POST['bano'];
    $espacio = $_POST['espacio'];
    $precio = $_POST['precio'];

    $sql = "insert into habitacion(nro,idtipohabitacion, banoprivado, espacio, precio) 
    values($nro, $descripcion, $bano, $espacio, $precio)";

    $query = mysqli_query($conexion,$sql);
    mysqli_close($conexion);
?>
<meta http-equiv="refresh" content="1;URL=readHabitacion.php">
        