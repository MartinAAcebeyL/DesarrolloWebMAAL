<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php
 session_start();
include ("conexion.php");

$user=$_POST['user'];
$password=sha1($_POST['password']);

$sql="select id, nombres, apellidos, correo, password, nivel from usuarios 
where correo='$user' and password='$password'";
$query=mysqli_query ($con, $sql);
$fila = mysqli_fetch_array($query);

if ($fila!=null){
    $_SESSION['nivel']=$fila['nivel'];
    $_SESSION['nombre']=$fila['nombres'];
    $_SESSION['apellido']=$fila['apellidos'];

    if (isset($_COOKIE['pudo'])){
        $valor=$_COOKIE['pudo']+1;
        setcookie("pudo",$valor,time()+3600); 
	}else
        setcookie("pudo",1,time()+3600);
    header('Location: inde.php');
}else{
    if (isset($_COOKIE['no_pudo'])){
        $valor=$_COOKIE['no_pudo']+1;
        setcookie("no_pudo",$valor,time()+3600); 
	}else
        setcookie("no_pudo",1,time()+3600);
    ?>
    <h2 style="color: red; text-align: center;">Datos de Autenticación Equivocados</h2>
    <meta http-equiv="refresh" content="1;URL=login.php">
    <?php
}
?>
</body>
</html>