<?php
include('conexion.php');
$id =$_GET['id'];
$sql = "delete from tipohabitaciones where id=$id";
$query = mysqli_query($conexion,$sql);

mysqli_close($conexion);
?>
se elimino con excito
<meta http-equiv="refresh" content="1;URL=readTHabitacion.php">