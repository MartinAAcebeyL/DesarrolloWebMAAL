<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/main.css">
    <title>Document</title>
</head>
<body>
    <?php
    include("conexion.php");
    $sql="select nombres, apellidos, correo, estado from usuarios";

    $query=mysqli_query ($con, $sql);
    ?>
    <table border="1" class="content">
        <thead style="background-color: #0000FF; color: white;">
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correos</th>
        </thead>
        <tbody>
        <?php while($fila = mysqli_fetch_array($query)){?>
            <tr>
                <td class="<?php echo $fila['estado']!='V'?"red":''?>"><?php echo $fila['nombres'] ?></td>
                <td class="<?php echo $fila['estado']!='V'?"red":''?>"><?php echo $fila['apellidos'] ?></td>
                <td class="<?php echo $fila['estado']!='V'?"red":''?>"><?php echo $fila['correo'] ?></td>
            </tr>
        </tbody>
        <?php 
        }
        ?>
    </table>
</body>
</html>