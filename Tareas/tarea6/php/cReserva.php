<?php
    include('conexion.php');
    
    $nro = $_POST['idHabitacion'];
    $fechaingreso = $_POST['fechaingreso'];
    $fechasalida = $_POST['fechasalida'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

    $sqlIdHabitacion = "select id, precio from habitacion where nro=$nro";
    $query = mysqli_query($conexion,$sqlIdHabitacion);
    $idhabitacion = mysqli_fetch_array($query);

    $codigoreserva = uniqid();
    //2003 12 15
    $vectorFI = explode('-',$fechaingreso);
    $vectorFS = explode('-',$fechasalida);
    $anos = $vectorFS[0]-$vectorFI[0];
    $meses = $vectorFS[1]-$vectorFI[1];
    $dias = $vectorFS[2]-$vectorFI[2];
    $tiempo = 0;
    if($anos != 0){
        $anos *365;
        $tiempo +=$anos;
    }
    if($meses != 0){
        $anos *30;
        $tiempo +=$meses;
    }
    $tiempo +=$dias;
    $preciotototal = $tiempo * $idhabitacion['precio'];
    
    $id = $idhabitacion['id'];
    $sql = "insert into reservas(codigoreserva, fechaingreso, fechasalida, idhabitacion, precio, pagada, nombre,
    apellidos, correoelectronico) values('$codigoreserva', '$fechaingreso', '$fechasalida',$id, 
    $preciotototal, 0, '$nombre', '$apellido', '$email')";

    $query = mysqli_query($conexion,$sql);
    mysqli_close($conexion);
?>
<h2>Datos ingresados</h2>
<form>
    <label>Sñr</label><input type="text" value="<?php echo $nombre.' '.$apellido;?>"><br>
    <label>Su codigo de reserva</label><input type="text" value="<?php echo $codigoreserva;?>"><br>
    <label>Dias de estadia</label><input type="text" value="<?php echo $tiempo;?>"><br>
    <label>Desde</label><input type="text" value="<?php echo $fechaingreso;?>"><br>
    <label>En la habitacio #</label><input type="text" value="<?php echo $nro;?>"><br>
    <label>Con un precio de:</label><input type="text" value="<?php echo $preciotototal;?>"><br>
    <label>Datos mandados al correo</label><input type="text" value="<?php echo $email;?>"><br>
</form>
<meta http-equiv="refresh" content="8;URL=../formreservas.php">