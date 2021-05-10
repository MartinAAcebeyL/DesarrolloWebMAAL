<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/main.css">
    <title>Document</title>
</head>
<body>
<?php
    include('conexion.php');

    $sql = "select id, descripcion, nrocamas from tipohabitaciones";
    
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
        <th>Descripcion</th>
        <th>Numero de camas</th>
        <th>Operaciones</th>
    </thead>
    <?php while ($fila = mysqli_fetch_array($query)) {?>
    <tr>
        <td><?php echo $fila['descripcion'] ?></td>
        <td><?php echo $fila['nrocamas'] ?></td>
        <td>
            <a href="formETH.php?id=<?php echo $fila['id']; ?>">Actualizar</a> 
            <a href="deleteTH.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
        </td>
                    
    </tr>
    <?php }
    mysqli_close($conexion);?>
</table>
<button type="submit"><a href="../formCTHabitacion.html">Crear</a></button>
</body>
</html>
