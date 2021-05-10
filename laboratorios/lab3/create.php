<?php
session_start();
$cantidad = $_SESSION['cant'];
include('conexion.php');

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$cu = $_POST['cu'];
$sexo = $_POST['sexo'];
$carrera = $_POST['carreras'];

for ($i=0; $i < $cantidad; $i++) { 
    $sql = "insert into alumnos(nombres, apellidos, cu, sexo, codigocarrera)
 values('$nombres[$i]', '$apellidos[$i]','$cu[$i]','$sexo[$i]', $carrera[$i])";
 //echo $sql."<br>";
 $query = mysqli_query($conexion,$sql);
}

mysqli_close($conexion);

//<meta http-equiv="refresh" content="1;URL=listaalumnos.php">
?>
<meta http-equiv="refresh" content="1;URL=listaalumnos.php">