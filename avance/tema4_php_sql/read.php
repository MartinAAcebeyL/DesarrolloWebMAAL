<?php
    session_start();

    include('verificarnivel.php');
    include('conexion.php');
    $sql = "select productos.id, fotografia, producto, descripcion, precio, categoria,marca from productos
    left join categorias on productos.idcategoria = categorias.id
    left join marcas on productos.idmarca = marcas.id ";

    if (isset($_GET['buscar'])){
        $buscar=$_GET['buscar'];
        $sql=$sql."WHERE producto like '%$buscar%' ";
        $sql=$sql."OR categoria like '%$buscar%' ";
        $sql=$sql."OR descripcion like '%$buscar%' ";
        $sql=$sql."OR marca like '%$buscar%' ";
    }else{
        $buscar="";
    }

    if(isset($_GET['orden'])){
        if (isset($_COOKIE["contador"])){
            $valor=$_COOKIE['contador']+1;
            if($valor%2==0)
                $sql = $sql.' order by '.$_GET['orden'].' asc';
            else
                $sql = $sql.' order by '.$_GET['orden'].' desc';
            setcookie("contador",$valor,time()+3600);
        }else
            setcookie("contador", 1, time()+3600);
    }else
        $orden="";

    $query=mysqli_query($conexion,$sql);
    echo "nombre: ".$_SESSION['nombre'];
?>
<div>
<a href="cerrarsession.php"> Cerrar cesion</a>
</div>

<div >
    <form action="read.php" method="GET">
	<label for="buscar">Buscar:</label> 
	<input type="text" name ="buscar" value="<?php echo $buscar?>">
	<input type="submit" value="Buscar">
	</form>
</div>

<table border="1">
    <tr>
        <th>Imagenes</th>
        <th> <a href="read.php?orden=producto&buscar=<?php echo $buscar; ?>">Producto</a></th>
        <th> <a href="read.php?orden=descripcion&buscar=<?php echo $buscar; ?>">Descripcion</a></th>
        <th> <a href="read.php?orden=precio&buscar=<?php echo $buscar; ?>">Precio</a></th>
        <th> <a href="read.php?orden=categoria&buscar=<?php echo $buscar; ?>">Categoria</a></th>
        <th> <a href="read.php?orden=marca&buscar=<?php echo $buscar; ?>">Marca</a></th>
        <?php
            if($_SESSION['nivel']>=1){?>
        <th>Operaciones</th>
        <?php }?>
    </tr>
    
    <?php
        while ($fila = mysqli_fetch_array($query)){?>
            <tr>
                <td><img width="100px" src="images/<?php echo $fila['fotografia']; ?>" alt="imgs"></td>
                <td><?php echo $fila['producto'] ?></td>
                <td><?php echo $fila['descripcion'] ?></td>
                <td><?php echo $fila['precio'] ?></td>
                <td><?php echo $fila['categoria'] ?></td>
                <td><?php echo $fila['marca'] ?></td>
                <?php
                if($_SESSION['nivel']>=1){?>
                <td><a href='formedit.php?id=<?php echo $fila['id']; ?>'>Actualizar</a>
                    <a href='delete.php?id=<?php echo $fila['id']; ?>'> Eliminar</a>
                </td>
                <?php
                }
                ?>
            </tr>
    <?php
        }?>
    </table>
    <button type="submit"><a href="formcreate.php">Crear</a></button>
    <?php mysqli_close($conexion);?>