<?php /* Crear el formulario login.html 
que solicita el usuario y la contraseña 
e invoca a autenticar.php que realiza 
la autenticación y que redirección 
a la página index.php, si el usuario 
coloca los datos incorrectos el sistema les muestra 
el mensaje “Datos de Autenticación Equivocados”, 
el mensaje debe ser de color Rojo y debe estar centrado. 
Utilizando cookies contar el numero de intentos ,cuantos 
pudo loguearse y cuantos no pudo hacerlo esa información se 
muestra en la página principal.*/?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <form action="autenticar.php" method="POST">
        <label>Usuario</label><input type="email" name="user">
        <label>contraseña</label><input type="password" name="password">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>