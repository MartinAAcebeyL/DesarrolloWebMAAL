<?php
include('classFinal.php');
$n = $_GET['n'];


$p=new finall($n,null);
echo $p->calcularSumatoria()

?>