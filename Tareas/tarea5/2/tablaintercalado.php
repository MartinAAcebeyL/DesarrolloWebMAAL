

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        $filas = $_POST['n'];
        $columnas = $_POST['m'];
        #echo $filas.' '.$columnas;

        echo "<table border='1' class='tab'>";
            $auxi_var = 0;
            for($i=1;$i<=$filas;$i++){
                echo "<tr>";
                for($j=1;$j<=$columnas;$j++){
                    if ($j % 2 != 0){
                        $op = $i - $auxi_var;
                        switch ($op) {
                            case 1:
                                echo "<td class='red'>&nbsp&nbsp&nbsp&nbsp</td>" ;
                                break;
                            case 2:
                                echo "<td class='yellow'>&nbsp&nbsp&nbsp&nbsp</td>" ;
                                break;
                            case 3:
                                echo "<td class='green'>&nbsp&nbsp&nbsp&nbsp</td>" ;
                                break;
                        }
                    }else{
                        if(($i+$j) % 2 != 0)
                            echo "<td class='red'>&nbsp&nbsp&nbsp&nbsp</td>";
                        else
                            echo "<td class='white'>&nbsp&nbsp&nbsp&nbsp</td>";
                    }
                }
                if($i % 3 == 0)
                    $auxi_var +=3;
                echo "</tr>";
            }

        echo "</table>";
        
    ?>
</body>
</html>