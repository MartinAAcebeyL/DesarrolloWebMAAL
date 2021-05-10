<?php
include('conexion.php');
$id =$_POST['id'];
$descripcion = $_POST['descripcion'];
$camas = $_POST['nrocamas'];

//fotografia
/*if(isset($_FILES['fotografia'])){
    $separado = explode('.', $_FILES['fotografia']['name']);
    $extencion = $separado[1];
    $fotografia = uniqid().'.'.$extencion;

    copy($_FILES['fotografia']['tmp_name'],'images/'.$fotografia);
}else{
    $fotografia = $_POST['foto'];
}*/
//

$sql = "update tipohabitaciones set descripcion='$descripcion', nrocamas=$camas where id=$id";
$query = mysqli_query($conexion,$sql);
mysqli_close($conexion);

?>
se actulizo con excito
<meta http-equiv="refresh" content="1;URL=readTHabitacion.php">