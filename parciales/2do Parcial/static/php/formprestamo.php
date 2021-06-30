<?php session_start();
	include ("conexion.php");
	
    

    $sql1="select id, carrera from carreras";
    $query1=mysqli_query ($conexion, $sql1);

    /*$sql2="select id,categoria from categorias";
    $query2=mysqli_query ($con, $sql2);
    
    
    $producto = mysqli_fetch_array($query);
    $sql3="select id,marca from marcas";

	$query3=mysqli_query ($con, $sql3);*/

   ?>


<body>
    <label>Carrera</label>
  
    <select id="carrera" onchange="cambio()">
		<?php while ($carrera = mysqli_fetch_array($query1))
	    {?>
         <option value="<?php echo $carrera['id']; ?>">
            <?php echo $carrera['carrera'];?>
          </option>  
        <?php 
        }
        ?>  
    </select>
   

    <label>Libros</label>
    <?php
        if(isset($_GET['id'])){
            $id =$_GET['id'];
            $sql="select id, titulo from libros where idcarrera=".$id;
            
            $query=mysqli_query($conexion, $sql);
        ?>
        <select id="libros">
            <?php while ($libros = mysqli_fetch_array($query)){?>

            <option value="<?php echo $libros['id']; ?>">
                <?php echo $libros['titulo'];?>
            </option>  
            <?php 
            }
            ?>  
        </select>
        <?php
        }

    ?>

