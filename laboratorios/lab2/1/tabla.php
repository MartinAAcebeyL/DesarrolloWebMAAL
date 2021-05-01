<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../styles/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
    
    $i = $_POST['f'];
    $j = $_POST['c'];

    echo "<table border='1'";
        for($n=1; $n<=$i+1; $n++){
            echo "<tr>";
                for($m=1; $m<=$j+1; $m++){
                    if ($n == 1 and $m == 1)
                        echo "<td> &nbsp </td>";
                    else if ($n == 1)
                        echo "<td class='blue'>".($m-1)."</td>";
                    else if($m == 1)
                        echo "<td class='blue'>".($n-1)."</td>";
                    else
                        echo "<td>".(($m-1)+($n-1))."</td>";                
                }
            echo "</tr>";
        }
    echo "</table>";
?>
</body>
</html>



