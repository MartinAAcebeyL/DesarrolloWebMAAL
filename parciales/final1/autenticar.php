<?php
session_start();
include('conexion.php');

$email = $_POST['email'];
$password = sha1($_POST['password']);

$sql = "select email,password,nombrecompleto,cu,nivel from usuarios where email='$email' and password='$password'";
$query = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_array($query);

//echo $fila;
if ($fila != null) {
    $_SESSION['nivel'] = $fila['nivel'];
    $_SESSION['nombrecompleto'] = $fila['nombrecompleto'];
    $_SESSION['email'] = $fila['email'];
    echo '<p>autenticado correctamente</p>'; 
}else{
    echo '<p>no autenticado</p>'; 
}
?>