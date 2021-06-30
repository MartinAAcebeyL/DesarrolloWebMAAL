<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php
        session_start();
	    include ("conexion.php");    
        $id=$_GET['id'];
        $sql = "select id, titulo, autor, anio from libros where id=".$id;
        $query=mysqli_query($conexion,$sql);
        $fila=mysqli_fetch_array($query);
    ?>

        <label>titulo</label><input type="text" id="titulo" value="<?php echo $fila['titulo'] ?>"><br>
        <label>autor</label><input type="text" id="autor" value="<?php echo $fila['autor'] ?>"><br>
        <label>anio</label><input type="number" id="anio" value="<?php echo $fila['anio'] ?>"><br>
        <button type="submit" id="btn" value="<?php echo $fila['id']?>" onclick="enviar()">Enviar</button>
    <?php
        echo 'realizada';
        mysqli_close($conexion);
    ?>
</body>
</html>