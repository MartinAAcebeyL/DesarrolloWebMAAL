<?php
include('conexion.php');
$producto = $_POST['producto'];
$categoria = $_POST['idcategoria'];
$marca = $_POST['idmarca'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];

//fotografia
$separado = explode('.', $_FILES['fotografia']['name']);
$extencion = $separado[1];
$fotografia = uniqid().'.'.$extencion;
//


$sql = "insert into productos(producto, fotografia,idcategoria, descripcion, idmarca, precio)
 values('$producto', '$fotografia',$categoria,'$descripcion', $marca,$precio)";
$query = mysqli_query($conexion,$sql);

mysqli_close($conexion);

copy($_FILES['fotografia']['tmp_name'],'images/'.$fotografia);
?>
<meta http-equiv="refresh" content="1;URL=read.php">