<?php 
include('operaciones.php');
session_start();
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];


$_SESSION['op']=new operaciones($a, $b, $c);
$_SESSION['a']=$a;
$_SESSION['b']=$b;
$_SESSION['c']=$c;

?>
<meta http-equiv="refresh" content="1;URL=../menu.php">