<?php
    include('conexion.php');

    $sql = "select id, nombres, apellidos, cu, sexo, carrera, codigocarrera from alumnos
    left join carreras on alumnos.codigocarrera=carreras.codigo";
    $query=mysqli_query($conexion,$sql);


    $carrerasText = "select codigo, carrera from carreras";
    $query2=mysqli_query($conexion,$carrerasText);
    $i =1;
?>

<table border="1">
    <thead>
        <th></th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>CU</th>
        <th>Sexo</th> 
        <th>Carrera</th>
    </thead>
    <tbody>
    <?php
    while ($fila = mysqli_fetch_array($query)){?>
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $fila['nombres'] ?></td>
            <td><?php echo $fila['apellidos'] ?></td>
            <td><?php echo $fila['cu'] ?></td>
            <td><?php echo $fila['sexo']=='M'?'Masculino':'Femenino'; ?></td>
            <td>
                <?php echo $fila['carrera'];?>
            </td>

        </tr>
    <?php
        $i++;
        }?>
    </tbody>
</table>
<button type="submit"><a href="Fitroduccion.html">Crear</a></button>


