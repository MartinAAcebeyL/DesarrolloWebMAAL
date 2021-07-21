<?php
    session_start();
    include('conexion.php');
    $sql = "select id, destino, asunto, mensaje, fecha from salidas";
    $query=mysqli_query($conexion,$sql);
?>
<table border="1" class="table table-bordered border-primary">
    <tr>
        <th>destino</th>
        <th>Asunto</th>
        <th>mensaje</th>
        <th>fecha</th>
    </tr>
    
    <?php
        while ($fila = mysqli_fetch_array($query)){?>
            <tr>
                <td><?php echo $fila['destino'] ?></td>
                <td><?php echo $fila['asunto'] ?></td>
                <td><?php echo $fila['mensaje'] ?></td>
                <td><?php echo $fila['fecha'] ?></td>
            </tr>
    <?php
        }?>
    </table>
    <?php mysqli_close($conexion);?>