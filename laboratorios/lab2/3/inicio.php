<?php 
if (isset($_COOKIE['contador']))
{
    $valor=$_COOKIE['contador']+1;
	echo "<h1>Gracias por ser un visitante frecuente usted visito este sitio $valor veces </h1>";
	setcookie("contador",$valor,time()+60); /* expira en 1 hora */
	}
else
{
	echo "<h1>Bienvenido<h1>";
	setcookie("contador",1,time()+60); /* expira en 1 hora */
}

?>