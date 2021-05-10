<?php
    $cadena = $_GET['tt'];
    $longitud = strlen($cadena);
    $aux='';

    for($i=$longitud-1; $i>=0; $i--){
        $aux.=$cadena[$i];
    }
    
    echo $aux;
?>