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
    $fila = mysqli_fetch_array($query);

    $sql1 = "select id, fotografia from fotoshabitacion";
    $query1=mysqli_query($conexion,$sql1);
?>
    <h2>Fotografias</h2>
    <?php 
    $query=mysqli_query($conexion,$sql);
    while ($fila = mysqli_fetch_array($query)) {?>
        <label><?php echo $fila['fotografia']; ?></label>
        <img width="200px" src="../images/<?php echo $fila['fotografia']; ?>">
        
    <?php }?>
        <br>
    <?php mysqli_close($conexion);?>

    <form action="delFoto.php" method="post">
        <select name="idFoto">
            <?php
                while ($fila1 = mysqli_fetch_array($query1)){?>
                    <option value="<?php echo $fila1["id"]; ?>">
                    <?php echo $fila1['fotografia'];?>
                    </option> 
            <?php } ?>
        </select>
        <input type="submit" value="Eliminar">
    </form>


</body>
</html>