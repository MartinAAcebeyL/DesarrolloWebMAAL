<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$n3 = $_GET['n3'];

$x = array($n1, $n2, $n3);
$may=0;
foreach( $x as $valor){
    if ($may< $valor)
        $may=$valor;
}

echo $may
?>