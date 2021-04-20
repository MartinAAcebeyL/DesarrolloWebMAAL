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
        $n=$_COOKIE['n'];
        $a = $_GET['a'];
        $b = $_GET['b'];
        echo '<table border="1">';
        echo "<tr>";
        for ($i=0; $i < $n; $i++) {
            echo "<td>".($a[$i]+$b[$i])."</td>";
        }
        echo "</tr>";
        echo '</table>';
    ?>

    <meta http-equiv="refresh" content="5; URL=formnIntroducir.php?n=<?php echo $n?>">
    
</body>
</html>