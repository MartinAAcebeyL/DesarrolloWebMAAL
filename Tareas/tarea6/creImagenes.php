<!DOCTYPE html>
<html lang="en">
<head>
    <title>Foto Habitaciones</title>
</head>
<body>
<?php
        include('php/conexion.php');
        $id = $_GET['id'];
        $sql1 = "select id, nro from habitacion";
        $query1=mysqli_query($conexion,$sql1);
?>

    <form action="php/cFotografia.php" method="POST" enctype="multipart/form-data">
        <label>Nro Habitacion</label>
        <select name="nro">
        <?php
            while ($fila1 = mysqli_fetch_array($query1)){?>
                <option value="<?php echo $fila1["id"]; ?>" 
                <?php echo $fila1['id']==$id?'selected':''; ?>>
                <?php echo $fila1['nro']; ?>
                </option> 
        <?php } mysqli_close($conexion);?>
        </select>
        <br>
        <label>Fotografia</label> <input type="file" name="fotografia"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>