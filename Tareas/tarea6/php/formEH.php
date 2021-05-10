<!DOCTYPE html>
<html lang="en">
<head>
    <title>editar habitacion</title>
</head>
<body>
    <?php
	    include ("conexion.php");    
        $id=$_GET['id'];
        
        $sql = "select id,nro,idtipohabitacion, banoprivado, espacio, precio from habitacion where id=".$id;
        $sql2 = "select id,descripcion from tipohabitaciones";

        $query=mysqli_query($conexion,$sql);
        $query2=mysqli_query($conexion,$sql2);

        $habitacion=mysqli_fetch_array($query);
    ?>
    <form action="editH.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $habitacion['id']; ?>">
        <label>Nro Habitacion</label>
        <input type="text" name="nro" value="<?php echo $habitacion['nro']; ?>"><br>

        <label>Descripcion:</label><br>
        <?php
            while ($thabitacion=mysqli_fetch_array($query2)){?>
                <input type="radio" name="idhabitacion" value="<?php echo $thabitacion['id'];?>"
                <?php echo $thabitacion['id']==$habitacion['idtipohabitacion']?'checked':''?>>
            <?php
                echo $thabitacion['descripcion'];
            }
           
        ?>
        <br>

        <label>Bano privado:</label><br>
        <label>Si</label>
    
        <input type="radio" name="bano" <?php echo $habitacion['banoprivado']==1?'checked':''?> 
        value="1">
        <label>No</label>
        <input type="radio" name="bano" <?php echo $habitacion['banoprivado']==0?'checked':''?>
        value="0">
        <br>
        <label>Espacio</label><input type="number" step="any" name="espacio" value="<?php echo $habitacion['espacio']?>"><br>
        <label>Precio</label><input type="number" step="any" name="precio" value="<?php echo $habitacion['precio']?>"><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        mysqli_close($conexion);
    ?>
</body>
</html>