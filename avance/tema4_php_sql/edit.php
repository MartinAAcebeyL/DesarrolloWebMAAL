<?php
include('conexion.php');
$producto = $_POST['producto'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$id =$_POST['id'];
$idcategoria =$_POST['idcategoria'];
$idmarca =$_POST['idmarca'];

//fotografia
if(isset($_FILES['fotografia'])){
    $separado = explode('.', $_FILES['fotografia']['name']);
    $extencion = $separado[1];
    $fotografia = uniqid().'.'.$extencion;

    copy($_FILES['fotografia']['tmp_name'],'images/'.$fotografia);
}else{
    $fotografia = $_POST['foto'];
}
//


$sql = "update productos set producto='$producto', idcategoria=$idcategoria, 
descripcion='$descripcion', precio=$precio, idmarca='$idmarca', fotografia='$fotografia' where id=$id";


$query = mysqli_query($conexion,$sql);

mysqli_close($conexion);

?>
se actulizo con excito
<meta http-equiv="refresh" content="1;URL=read.php">