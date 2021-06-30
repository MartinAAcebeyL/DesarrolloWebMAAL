<?php
    session_start();

    include('conexion.php');
    $sql = "select id, imagen, titulo, autor, anio from libros";

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
    <tr>
        <th>Imagenes</th>
        
        <th> <a href='javascript:cargarContenido_a("static/php/read.php?orden=titulo")'>titulo</a></th>
        <th> <a href='javascript:cargarContenido_a("static/php/read.php?orden=autor")'>autor</a></th>
        <th> <a href='javascript:cargarContenido_a("static/php/read.php?orden=anio")'>anio</a></th>
        <?php
            if($_SESSION['nivel']>=1){?>
        <th>Operaciones</th>
        <?php }?>
    </tr>
    
    <?php
        while ($fila = mysqli_fetch_array($query)){?>
            <tr>
                <td><img width="100px" src="images/<?php echo $fila['titulo']; ?>.jpg" alt="imgs"></td>
                <td><?php echo $fila['titulo'] ?></td>
                <td><?php echo $fila['autor'] ?></td>
                <td><?php echo $fila['anio'] ?></td>
                <?php
                if($_SESSION['nivel']>=1){?>
                <td>
                    <button id="editar" value='<?php echo $fila['id']; ?>' onclick="editar(this)">Editar</button>
                </td>
                <?php
                }
                ?>
            </tr>
    <?php
        }?>
    </table>
    
<?php mysqli_close($conexion);?>