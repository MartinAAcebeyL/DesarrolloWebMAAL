<?php
session_start();
include('conexion.php');

$correo = $_POST['correo'];
$password = sha1($_POST['password']);

$sql = "select nombre,correoelectronico,nivel from usuarios where correoelectronico='$correo' and password='$password'";
$query = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_array($query);

if ($fila != null) {
    $_SESSION['nivel'] = $fila['nivel'];
    $_SESSION['nombre'] = $fila['nombre'];
    $_SESSION['correoelectronico'] = $fila['correoelectronico'];
    header("Location: read.php");
}else{
?>
contrasena incorrecta
<meta http-equiv="refresh" content="2;URL=formlogin.html">
<?php
}
?>