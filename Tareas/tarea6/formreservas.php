<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/main.css">
    <title>Habitacioines</title>
</head>
<body>
<?php
    include('php/conexion.php');

    $sql = "select habitacion.id, descripcion,nro,idtipohabitacion, banoprivado, espacio, precio from habitacion
    left join tipohabitaciones on habitacion.idtipohabitacion = tipohabitaciones.id";
    
    $query=mysqli_query($conexion,$sql);
?>
<h2>Habitaciones</h2>
<table border="1">
    <thead>
        <th>Nro habitacion</th>
        <th>Descripcion</th>
        <th>bano privado</th>
        <th>espacio</th>
        <th>precio bs</th>

    </thead>
    <?php while ($fila = mysqli_fetch_array($query)) {?>
    <tr>
        <td><?php echo $fila['nro'] ?></td>
        <td><?php echo $fila['descripcion'] ?></td>
        <td><?php echo $fila['banoprivado']==1?'si':'no' ?></td>
        <td><?php echo $fila['espacio'] ?></td>
        <td><?php echo $fila['precio'] ?></td>                  
    </tr>
    <?php }
    mysqli_close($conexion);?>
</table>

<br>
<form action="php/cReserva.php" method="post">
    <label>Nro Habitacion</label><input type="number" name="idHabitacion"><br>
    <label>Fecha de ingreso</label> <input type="date" name="fechaingreso"><br>
    <label>Fecha de salida</label> <input type="date" name="fechasalida"><br>
    <label>Nombre</label><input type="text" name="nombre"><br>
    <label>Apellido</label><input type="text" name="apellido"><br>
    <label>Email</label><input type="email" name="email"><br>
    <input type="submit" value="Reservar">
</form>
</body>
</html>
