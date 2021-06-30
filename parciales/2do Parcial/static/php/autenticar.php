<?php
session_start();
include('conexion.php');

$correo = $_POST['usuario'];
$password = sha1($_POST['password']);

$sql = "select usuario,nombrecompleto,cu,idcarrera,nivel from usuarios where usuario='$correo' and password='$password'";
$query = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_array($query);

//echo $fila;
if ($fila != null) {
    $_SESSION['nivel'] = $fila['nivel'];
    $_SESSION['usuario'] = $fila['usuario'];
    echo '<p id="ms" value="1">autenticado correctamente</p>'; 
}else{
    echo '<p id="ms" value="1">no autenticado</p>'; 
}
?>