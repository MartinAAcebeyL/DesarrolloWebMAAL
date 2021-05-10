<?php
//<meta http-equiv="refresh" content="1;URL=readHabitacion.php">
    include('conexion.php');
    
    $nro = $_POST['idHabitacion'];
    $fechaingreso = $_POST['fechaingreso'];
    $fechasalida = $_POST['fechasalida'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

    $sqlIdHabitacion = "select id from habitacion where nro=$nro";
    $query = mysqli_query($conexion,$sqlIdHabitacion);
    $idhabitacion = mysqli_fetch_array($query);

    $codigoreserva = uniqid();

    //$dias = "SELECT DATEDIFF(DAY, '$fechaingreso', '$fechasalida')";
    $dias ="SELECT DATEDIFF(DAY, '$fechaingreso', '$fechasalida') as dif";
    $query2 = mysqli_query($conexion,$dias);
    $cantDias = mysqli_fetch_array($query2);
    echo $cantDias['dif']."<br>";
    
    

    echo $idhabitacion['id'].' '.$codigoreserva.' '.$dias;

    /*$sql = "insert into reservas(nro,idtipohabitacion, banoprivado, espacio, precio) 
    values($nro, $descripcion, $bano, $espacio, $precio)";*/

    //$query = mysqli_query($conexion,$sql);
    mysqli_close($conexion);
?>
