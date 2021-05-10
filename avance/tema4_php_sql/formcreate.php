<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crear</title>
</head>
<body>
    <?php
        session_start();
        include('verificarnivel.php');
        include('conexion.php');
        $sql = "select id,categoria from categorias";
        $query=mysqli_query($conexion,$sql);

        $sql2 = "select id, marca from marcas";
        $query2 = mysqli_query($conexion,$sql2);
    ?>
    <form action="create.php" method="POST" enctype="multipart/form-data">
        <label for="producto">Producto</label> <input type="text" name="producto"><br>
        <label for="fotografia">Fotografia</label> <input type="file" name="fotografia"><br>
        <label for="categoria">Categoria</label>
        <?php
            while ($fila = mysqli_fetch_array($query)){
                echo '<input type="radio" name="idcategoria" value="'.$fila["id"].'">';
                echo $fila['categoria'];
            }
        ?>
        <br>
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="" cols="10" rows="10"></textarea><br>
        
        <label for="descripcion">Marca</label>
        <select name="idmarca">
        <?php
            while ($fila1 = mysqli_fetch_array($query2)){?>
                <option value="<?php echo $fila1["id"]; ?>">
                <?php echo $fila1['marca'];?>
                </option> 
        <?php } ?>
        </select>
        <br>
        <label for="precio">Precio</label> <input type="number" step="any" name="precio">
        <input type="submit">
    </form>
</body>
</html>