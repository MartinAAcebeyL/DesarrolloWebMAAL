<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="fetch.js"></script>
</head>
<body>
    <div class="content">
        <div id="contenido">
        </div><br>
        <div class="envio">
            <div><label>MES</label> 
            <select id="m">
                <?php for ($i=1; $i < 13; $i++) {?>
                    <option value="<?php echo $i?>"><?php echo $i?></option>
                <?php
                }?>
            </select></div>
            <div><label>AÑO</label><input type="number" name="ano" id="a"></div>
        </div><br>
        <div class="button"><button type="submit" onclick="enviar()">Mostrar</button></div>
        
    </div>
    <script>
        function enviar() {
            var m = parseInt(document.getElementById('m').value);
            var a = parseInt(document.getElementById('a').value);
             
            console.log(m)
            console.log(a)
            var url="calendario.php?mes="+m+"&anio="+a;
            cargarContenido(url)
         }
     </script>
</body>
</html>