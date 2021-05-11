<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/main.css">
    <title>Habitacioines</title>
</head>
<body>
<?php
    include('conexion.php');
    $id = $_GET['id'];
    $sql = "select habitacion.id, fotografia, descripcion,nro,idtipohabitacion, banoprivado, espacio, precio from habitacion
    left join tipohabitaciones on habitacion.idtipohabitacion = tipohabitaciones.id
    left join fotoshabitacion on habitacion.id=fotoshabitacion.idhabitacion where habitacion.id=$id" ;

    $query=mysqli_query($conexion,$sql);
    $fila = mysqli_fetch_array($query)
?>

<table border="1">
    <thead>
        <th>Nro habitacion</th>
        <th>Descripcion</th>
        <th>banoprivado</th>
        <th>espacio</th>
        <th>precio bs</th>
    </thead>
    <tr>
        <td><?php echo $fila['nro'] ?></td>
        <td><?php echo $fila['descripcion'] ?></td>
        <td><?php echo $fila['banoprivado'] ?></td>
        <td><?php echo $fila['espacio'] ?></td>
        <td><?php echo $fila['precio'] ?></td>                    
    </tr>
  
</table>
    <h2>Fotografias</h2>
    <?php 
    $query=mysqli_query($conexion,$sql);
    while ($fila = mysqli_fetch_array($query)) {?>
        <img width="200px" src="../images/<?php echo $fila['fotografia']; ?>">
        
    <?php }?>
        <br>
    <?php mysqli_close($conexion);?>

<button type="submit"><a href="../creImagenes.php?id=<?php echo $id?>">Aumentar imagenes</a></button>
<button type="submit"><a href="dImagenes.php?id=<?php echo $id?>">Eliminar imagenes</a></button>
</body>
</html>