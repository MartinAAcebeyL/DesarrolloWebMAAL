<?php
    session_start();
    include('conexion.php');

    $nivel = 1;
    if($_SESSION['nivel'] == 0)
        $nivel = 0;
        
    $sql = "select id, nombre, correoelectronico, nivel from usuarios";
    $query=mysqli_query($conexion,$sql);
    echo "nombre: ".$_SESSION['nombre'];
?>
<div>
<a href="cerrarsession.php"> Cerrar cesion</a>
</div>
<table border="1" class="table table-striped">
    <tr>
        <th>Correos</th>
        <th>Nombre</th>
        <th>Nivel</th>
        <?php
            if($_SESSION['nivel']>=1){?>
        <th>Operaciones</th>
        <?php }?>
    </tr> 
    <?php
        while ($fila = mysqli_fetch_array($query)){?>
            <tr>
                <td><?php echo $fila['correoelectronico'] ?></td>
                <td><?php echo $fila['nombre'] ?></td>
                <td><?php echo $fila['nivel']==1?'Administrador':'Usuario' ?></td>
                <?php
                if($_SESSION['nivel']>=1){?>
                <td>
                    <?php if($fila['nivel']>=1){?>
                        <button type="button" class="btn btn-secondary" value="<?php echo $fila['id'] ?>" onclick="change_level(this)">Cambiar a usuario</button>
                    <?php }else{?>
                        <button type="button" class="btn btn-warning" value="<?php echo $fila['id'] ?>" onclick="change_level(this)">Cambiar a administrador</button>
                    <?php } ?>
                </td>
                <?php
                }
                ?>
            </tr>
    <?php
        }?>
    </table>
    <?php mysqli_close($conexion);?>

