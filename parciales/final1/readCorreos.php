<?php
    session_start();
    include('conexion.php');
    $sql = "select id, origen, asunto, mensaje, fecha from entradas";
    $query=mysqli_query($conexion,$sql);
?>
<table border="1" class="table table-bordered border-primary">
    <tr>
        <th>Origen</th>
        <th>Asunto</th>
        <th>mensaje</th>
        <th>fecha</th>
    </tr>
    
    <?php
        while ($fila = mysqli_fetch_array($query)){?>
            <tr>
                <td><?php echo $fila['origen'] ?></td>
                <td><?php echo $fila['asunto'] ?></td>
                <td><?php echo $fila['mensaje'] ?></td>
                <td><?php echo $fila['fecha'] ?></td>
            </tr>
    <?php
        }?>
    </table>
    <?php mysqli_close($conexion);?>