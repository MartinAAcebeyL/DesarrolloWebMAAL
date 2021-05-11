<?php
include('conexion.php');

$nro = $_POST['nro'];

$sqlIdHabitacion = "select id, precio from habitacion where id=$nro";
$query = mysqli_query($conexion,$sqlIdHabitacion);
$idhabitacion = mysqli_fetch_array($query);
$id = $idhabitacion['id'];

//fotografia
$separado = explode('.', $_FILES['fotografia']['name']);
$extencion = $separado[1];
$fotografia = uniqid().'.'.$extencion;
//

$sql = "insert into fotoshabitacion(idhabitacion, fotografia)
 values('$id', '$fotografia')";
$query = mysqli_query($conexion,$sql);

mysqli_close($conexion);

copy($_FILES['fotografia']['tmp_name'],'../images/'.$fotografia);
?>
<meta http-equiv="refresh" content="1;URL=readHabitacion.php">
