<?php
    include('conexion.php');

    $sql = "select id, producto, precio, descripcion from productos";
    $query=mysqli_query($conexion,$sql);
?>

<table class="table" >
    <thead>
        <th>producto</th>
        <th>precio</th>
        <th>descripcion</th>
    </thead>
    <tbody>
    <?php
    while ($fila = mysqli_fetch_array($query)){?>
        <tr>
            <td><?php echo $fila['producto'] ?></td>
            <td><?php echo $fila['precio'] ?></td>
            <td><?php echo $fila['descripcion'] ?></td>
        </tr>
    <?php
        }?>
    </tbody>
</table>