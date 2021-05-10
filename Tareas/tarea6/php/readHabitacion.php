<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/main.css">
    <title>Habitacioines</title>
</head>
<body>
<?php
    include('conexion.php');

    $sql = "select habitacion.id, descripcion,nro,idtipohabitacion, banoprivado, espacio, precio from habitacion
    left join tipohabitaciones on habitacion.idtipohabitacion = tipohabitaciones.id";
    
    /*if(isset($_GET['orden'])){
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
        $orden="";*/
    $query=mysqli_query($conexion,$sql);

?>

<table border="1">
    <thead>
        <th>Nro habitacion</th>
        <th>Descripcion</th>
        <th>banoprivado</th>
        <th>espacio</th>
        <th>precio bs</th>
        <th>operaciones</th>
    </thead>
    <?php while ($fila = mysqli_fetch_array($query)) {?>
    <tr>
        <td><?php echo $fila['nro'] ?></td>
        <td><?php echo $fila['descripcion'] ?></td>
        <td><?php echo $fila['banoprivado'] ?></td>
        <td><?php echo $fila['espacio'] ?></td>
        <td><?php echo $fila['precio'] ?></td>
        <td>
            <a href="formEH.php?id=<?php echo $fila['id']; ?>">Actualizar</a> 
            <a href="deleteH.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
        </td>
                    
    </tr>
    <?php }
    mysqli_close($conexion);?>
</table>
<button type="submit"><a href="../formCHabitacion.php">Crear</a></button>
</body>
</html>
