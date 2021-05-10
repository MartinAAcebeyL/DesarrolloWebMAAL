<?php
    include('conexion.php');

    $descripcion = $_POST['descripcion'];
    $camas = $_POST['camas'];

    $sql = "insert into tipohabitaciones(descripcion, nrocamas) values('$descripcion', $camas)";
    $query = mysqli_query($conexion,$sql);
    mysqli_close($conexion);
?>
<meta http-equiv="refresh" content="1;URL=readTHabitacion.php">