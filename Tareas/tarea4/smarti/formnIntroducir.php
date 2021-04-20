<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>  
    <?php
        $n=$_GET['n'];
        setcookie("n",$n,time()+1800);
        echo "<form action='operacion.php' method='GET'>";
        for($i=0; $i<$n; $i++){
            echo "<input type='number' name='a[]'>";
        }
        
        echo '<br>';
        for($i=0; $i<$n; $i++){
            echo "<input type='number' name='b[]'>";
        }
        echo '<br>';
        echo '<input type="submit" value="Enviar">';
        echo "</form>";  
    ?>
    
</body>
</html>