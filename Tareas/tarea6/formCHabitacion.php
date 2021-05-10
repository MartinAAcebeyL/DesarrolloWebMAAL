<!DOCTYPE html>
<html lang="en">
<head>
    <title>Habitaciones</title>
</head>
<body>
<?php
        include('php/conexion.php');
        $sql = "select id,descripcion from tipohabitaciones";
        $query=mysqli_query($conexion,$sql);
?>
    <form action="php/cHabitacion.php" method="POST">
        <label>Nro Habitacion</label><input type="number" name="nro"><br>
        <label>Descripcion:</label><br>
        <?php
            while ($fila = mysqli_fetch_array($query)){
                echo '<input type="radio" name="idhabitacion" value="'.$fila["id"].'">';
                echo $fila['descripcion'];
            }
        ?>
        <br>
         <label>Bano privado:</label><br>
        <label>Si</label>
        <input type="radio" name="bano" value="1">
        <label>No</label>
        <input type="radio" name="bano" value="0">
        <br>
        <label>Espacio</label><input type="number" step="any" name="espacio"><br>
        <label>Precio</label><input type="number" step="any" name="precio"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>