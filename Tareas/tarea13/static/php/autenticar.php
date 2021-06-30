<?php
session_start();
include('conexion.php');

$correo = $_GET['email'];
$password = sha1($_GET['password']);

$sql = "select nombre,correoelectronico,nivel from usuarios where correoelectronico='$correo' and password='$password'";
$query = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_array($query);
//echo $fila;
if ($fila != null) {
    $_SESSION['nivel'] = $fila['nivel'];
    $_SESSION['nombre'] = $fila['nombre'];
    $_SESSION['correoelectronico'] = $fila['correoelectronico'];
    echo '<p id="ms" value="1">sesecion iniciada</p>';
   
?>
 
<?php
}else{
echo '<p value="0">contrasena incorrecta</p>';
}
?>