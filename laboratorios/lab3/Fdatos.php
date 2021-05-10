<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/main.css">
    <title>Insertar</title>
</head>
<body>
    <?php
        session_start();
        include('conexion.php');
        $cant=$_GET['cantidad'];
        $_SESSION['cant']=$cant;

        $carrerasText = "select codigo, carrera from carreras";
        $query=mysqli_query($conexion,$carrerasText);
    ?>
            <table >
                <thead>
                    <th></th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>CU</th>
                    <th>Sexo</th>
                    <th>Carrera</th>
                </thead>
        <form action="create.php" method="post">
    <?php for ($i=0; $i < $cant; $i++) {  
        $query=mysqli_query($conexion,$carrerasText);?>         
                <tbody>
                    <tr>
                        <td><?php echo $i+1?></td>
                        <td><input type="text" name="nombres[]"></td>
                        <td><input type="text" name="apellidos[]"></td>
                        <td><input type="text" name="cu[]"></td>
                        <td>
                            <input type="radio" name="sexo[<?php echo $i?>]" value="M"><label>Masculino</label>
                            <input type="radio" name="sexo[<?php echo $i?>]" value="F"><label>Femenino</label>
                        </td>
                        <td>
                            <select name="carreras[]">
                            <?php
                                while ($fila = mysqli_fetch_array($query)){?>
                                    <option value="<?php echo $fila["codigo"]; ?>">
                                    <?php echo $fila['carrera'];?>
                                    </option> 
                            <?php } ?>
                            </select>
                            <br>
                        </td>
                    </tr>
                </tbody>
            
            </table>
   
    <?php
        }
        mysqli_close($conexion);
    ?>
    <input type="submit" value="Enviar"> <input type="reset" value="Limpiar">
    </form>
    
</body>
</html>