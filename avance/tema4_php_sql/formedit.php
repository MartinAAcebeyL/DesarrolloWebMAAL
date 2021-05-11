<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        include ("verificar.php");
	    include ("verificarnivel.php");
	    include ("conexion.php");    
        $id=$_GET['id'];
        $sql = "select id, producto, fotografia, idcategoria, descripcion,idmarca, precio from productos where id=".$id;
        $query=mysqli_query($conexion,$sql);
        $fila=mysqli_fetch_array($query);

        $sql2 = "select id,categoria from categorias";
        $query2=mysqli_query($conexion,$sql2);

        $sql3 = "select id,marca from marcas";
        $query3 = mysqli_query($conexion,$sql3);
    ?>
    <form action="edit.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $fila['id']?>">
        <input type="hidden" name="foto" value="<?php echo $fila['fotografia']?>">
        <label for="producto">Producto</label><input type="text" name="producto" value="<?php echo $fila['producto'] ?>"><br>
    
        <label for="fotografia">Fotografia</label> 
        <img width="100px" src="images/<?php echo $fila['fotografia']; ?>" alt="imgs">
        <input type="file" name="fotografia"><br>

        <label for="categoria">Categoria</label>
        <?php
            while ($fila2 = mysqli_fetch_array($query2)){?>
                <input type="radio" name="idcategoria" value="<?php echo $fila2['id']; ?>"
                <?php echo $fila['idcategoria']==$fila2['id']?'checked':''?> >
            <?php
                echo $fila2['categoria'];
            }
        ?>
        <br>
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="" cols="10" rows="10"><?php echo $fila['descripcion'] ?></textarea><br>
        
        <label for="marca">Marca</label>
        <select name="idmarca">
        <?php
            while ($fila1 = mysqli_fetch_array($query3)){?>
                <option value="<?php echo $fila1["id"]; ?>" 
                <?php echo $fila['idmarca']==$fila1['id']?'selected':''; ?>>
                <?php echo $fila1['marca'];?>
                </option> 
        <?php } ?>
        </select>
        <br>
        
        <label for="precio">Precio</label> <input type="number" step="any" name="precio" value="<?php echo $fila['precio'] ?>">
        <input type="submit">
    </form>

    <?php
        mysqli_close($conexion);
    ?>
</body>
</html>