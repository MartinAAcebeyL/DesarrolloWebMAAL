<?php 
session_start();
include("conexion.php");

$id = $_POST['id'];
$nombres=$_POST['name'];
$apellidos=$_POST['apellido'];
$email=$_POST['email'];

for ($i=0; $i < 3; $i++) { 
    $sql="update usuarios set nombres='$nombres[$i]',apellidos='$apellidos[$i]', 
    correo='$email[$i]' where id=$id[$i]";
    $query=mysqli_query ($con, $sql);
    //echo $sql."<br>";
}

//$query=mysqli_query ($con, $sql);

mysqli_close ($con);

//<meta http-equiv="refresh" content="5;URL=pregunta3.php">
?>
<meta http-equiv="refresh" content="5;URL=pregunta3.php">