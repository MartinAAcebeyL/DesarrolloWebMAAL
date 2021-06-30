<?php
include('conexion.php');
$id =$_GET['id'];


$sql1 = "select nivel from usuarios where id=$id";
$query = mysqli_query($conexion,$sql1);
$fila = mysqli_fetch_array($query);

if($fila['nivel'] == 1)
    $sql = "update usuarios set nivel='nivel-1' where id=$id";
else if($fila['nivel'] == 0)
    $sql = "update usuarios set nivel='nivel+1' where id=$id";

$query = mysqli_query($conexion,$sql);
mysqli_close($conexion);
echo 'se actulizo con excito';
?>