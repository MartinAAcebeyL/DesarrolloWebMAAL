<?php
    $n = $_GET['n'];

    $fibo1=1;
    $fibo2=1;
    echo $fibo1." ";
    for($i=2; $i<=$n; $i++){
        echo $fibo2." ";
        $fibo2+= $fibo1;
        $fibo1 = $fibo2 - $fibo1;
    }

?>