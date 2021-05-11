<?php
include('conexion.php');
$id =$_POST['idFoto'];
$sql = "delete from fotoshabitacion where id=$id";
$query = mysqli_query($conexion,$sql);

mysqli_close($conexion);


?>
se elimino con excito
<meta http-equiv="refresh" content="3;URL=readHabitacion.php">