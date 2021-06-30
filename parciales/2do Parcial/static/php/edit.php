<?php
include('conexion.php');

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$anio = $_POST['anio'];
$id =$_POST['id'];



$sql = "update libros set titulo='$titulo', autor='$autor', anio=$anio where id=$id";
$query = mysqli_query($conexion,$sql);

mysqli_close($conexion);

?>
