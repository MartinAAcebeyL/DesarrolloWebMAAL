<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/main.css">
    <title>Document</title>
</head>
<body>
<?php
    include('php/conexion.php');

    $sql = "select procedencia,codigopais from procedencias";
    
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

?>

<table border="1">
    <thead class="blue">
        <th> <a href="reaprocedencias.php?orden=procedencia">Procedencia</a></th>
        <th> <a href="reaprocedencias.php?orden=codigopais">Codigo pais</a></th>
    </thead>
    <?php while ($fila = mysqli_fetch_array($query)) {?>
    <tr>
        <td><?php echo $fila['procedencia'] ?></td>
        <td><?php echo $fila['codigopais'] ?></td>
    </tr>
    <?php }
    mysqli_close($conexion);?>

</table>
</body>
</html>

