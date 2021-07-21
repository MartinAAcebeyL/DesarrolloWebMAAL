<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>

    <script src="main.js"></script>
  </head>
  <body>
    <div class="container">
       <div class="row border">
           <div class="col-10 bg-warning text-center" id="cabeza">
               Universidad de San Francisco Xavier <br>
               Facultad de Ciencias y Tecnologia <br>
           </div>
       </div>
       <div class="row border">
            <div class="col-2 bg-primary" id="menu">
                <a href="javascript:cargarContenido_a('pregunta1.php')" class="text-white text-center">Pregunta 1</a><br>
                <a href="javascript:cargarContenido_a('pregunta2.php')" class="text-white text-center">Pregunta 2</a><br>
                <a href="javascript:cargarContenido_a('pregunta3.html')" class="text-white text-center">Pregunta 3</a><br>
                <a href="javascript:cargarContenido_a('pregunta4.html')" class="text-white text-center">Pregunta 4</a><br>
                <a href="javascript:cargarContenido_a('pregunta5.php')" class="text-white text-center">Pregunta 5</a><br>
            </div>
            <div class="col-10" id="cuerpo">
                <p>Primer examen de programacion de internet intranet</p>
            </div>
       </div>
       <div class="row border" >
             <div class="col bg-danger text-white" id="pie">
                 <p>Alumno:</p>
                 <p>CU:</p>
             </div>
       </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>