<?php
include('conexion.php');
$id =$_POST['id'];
$nro = $_POST['nro'];
$idhabitacion = $_POST['idhabitacion'];
$bano = $_POST['bano'];
$espacio = $_POST['espacio'];
$precio = $_POST['precio'];


$sql = "update habitacion set nro=$nro, idtipohabitacion=$idhabitacion, banoprivado=$bano,
espacio=$espacio, precio=$precio where id=$id";

$query = mysqli_query($conexion,$sql);
mysqli_close($conexion);
?>
se actulizo con excito
<meta http-equiv="refresh" content="1;URL=readHabitacion.php">