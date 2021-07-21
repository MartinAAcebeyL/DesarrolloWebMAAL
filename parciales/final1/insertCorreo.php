<?php
include('conexion.php');
$destino = $_POST['destino'];
$asunto = $_POST['asunto'];
$sms = $_POST['sms'];
$date = $_POST['date'];

$sql = "insert into salidas(destino, asunto,mensaje, fecha)
 values('$destino', '$asunto','$sms', '$date')";
$query = mysqli_query($conexion,$sql);
echo 'insercion echoa';
mysqli_close($conexion);

?>