<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="style/main1.css">
	<title>Crear Producto</title>
</head>
<body>
	<?php 
    session_start();
	include ("conexion.php");
	$sql="select id, nombres, apellidos, correo, estado from usuarios";
	
	$query=mysqli_query ($con, $sql);
   ?>

    <table border="1" class="content">
        <thead style="background-color: #0000FF; color: white;">
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correos</th>
        </thead>
        <tbody>
        <form action="edit.php" method="POST">
        <?php while($fila = mysqli_fetch_array($query)){?>
            <input type="hidden" name="id[]" value="<?php echo $fila['id']; ?>">
            <tr>   
                <td class="<?php echo $fila['estado']!='V'?"red":''?>"> <input type="text" name="name[]" value="<?php echo $fila['nombres']; ?>"></td>
                <td class="<?php echo $fila['estado']!='V'?"red":''?>"> <input type="text" name="apellido[]" value="<?php echo $fila['apellidos']; ?>"></td>
                <td class="<?php echo $fila['estado']!='V'?"red":''?>"> <input type="text" name="email[]" value="<?php echo $fila['correo']; ?>"></td>
            </tr>
        <?php }?>
                
        </tbody>  
        
    </table>
    <input type="submit" value="Editar">
    </form>
    	
</body>
</html>