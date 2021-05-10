<!DOCTYPE html>
<html lang="en">
<head>
    <title>editar tipo habitacion</title>
</head>
<body>
    <?php
        session_start();
	    include ("conexion.php");    
        $id=$_GET['id'];
        $sql = "select id, descripcion,nrocamas from tipohabitaciones where id=".$id;
        $query=mysqli_query($conexion,$sql);
        $fila=mysqli_fetch_array($query);

        /*$sql2 = "select id,categoria from categorias";
        $query2=mysqli_query($conexion,$sql2);

        $sql3 = "select id,marca from marcas";
        $query3 = mysqli_query($conexion,$sql3);*/

        //enctype="multipart/form-data"
    ?>
    <form action="editTH.php" method="POST" >
        <input type="hidden" name="id" value="<?php echo $fila['id']?>">
        <label>Descripcion</label>
        <textarea name="descripcion" cols="30" rows="10">
<?php echo $fila['descripcion']; ?>
        </textarea>
        <br>
        <label>Nro camas</label>
        <input type="text" name="nrocamas" value="<?php echo $fila['nrocamas'] ?>">
        <input type="submit">
    </form>

    <?php
        mysqli_close($conexion);
    ?>
</body>
</html>