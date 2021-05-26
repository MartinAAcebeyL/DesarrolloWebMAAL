<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/main.css">
    <title>Index</title>
</head>
<body>
    <?php
        session_start();

        $si=$_COOKIE['pudo'];
        $no=$_COOKIE['no_pudo'];     
    ?>
    <div class="content">
        <div class="cabeza">
            <div class="cabeza_img">
                <img src="images/logo.png" alt="">
                <img src="images/tecnologia.png" alt="">
            </div>
            <div class="cabeza_text">
                <p>Carrera Ing de Sistemas</p>
                <p>Semestre 1-2021</p>
                <p>Alumno: <span class="blue">Martin Andres Acebey Laime </span class="blue"> CU <span>111-329</span></p>   
            </div>
        </div>
        <div class="cuerpo">
            <div class="cuerpo1">
                <p>Estos son los datos de autenticación:</p>
                <p>Nombres:<?php echo $_SESSION['nombre']; ?> </p>
                <p>Apellidos: <?php echo $_SESSION['apellido']; ?> </p>
                <p>Nivel: <?php echo $_SESSION['nivel']==1?'Administradps':'Espectador'; ?></p>
            </div>
            <div class="cuerpo2">
                <p class="red"><a href="index.html">Inicio</a></p>
                <p class="yellow"><a href="pregunta3.php">Pregunta 3</a></p>
                <p class="green"><a href="formcalendario.html">Pregunta 4</a></p>
                <p class="white"><a href="pregunta5.php">Pregunta 5</a></p>
            </div>
        </div>
        <div class="foot">
            <p>Todos los Derechos Reservados</p>
            <p>Nro intentos: <?php echo ($si+$no) ?> nro erroneos:<?php echo $si ?> nro ingresos:<?php echo $no?></p>
        </div>
    </div>
</body>
</html>