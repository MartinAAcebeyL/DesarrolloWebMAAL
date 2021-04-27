<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $n = $_POST['n'];
        $m = $_POST['m'];
        
        if ($n % $m == 0)
            echo "<img src='imgs/em.png'>";
        else
            echo "<img src='imgs/nm.png'>";
    ?>
</body>
</html>