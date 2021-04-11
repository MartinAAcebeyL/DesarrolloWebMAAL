<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../styles/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    $i = $_GET['i'];
    $j = $_GET['j'];

    echo "<table border='1'";
        for($n=1; $n<=$i+1; $n++){
            echo "<tr>";
                for($m=1; $m<=$j+1; $m++){
                    if ($n == 1 and $m == 1)
                        echo "<td> &nbsp </td>";
                    else if ($n == 1)
                        echo "<td>".($m-1)."</td>";
                    else if($m == 1)
                        echo "<td>".($n-1)."</td>";
                    else
                        echo "<td> &nbsp </td>";                
                }
            echo "</tr>";
        }
    echo "</table>";
?>
</body>
</html>



