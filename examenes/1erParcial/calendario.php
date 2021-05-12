<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];
    $dias = 0;
    switch ($mes) {
        case 1: case 3: case 5: case 7: case 8: case 10: case 12:
            $dias = 31;
            break;
        case 4: case 6: case 9: case 11:
            $dias = 30;
            break;
        case 2:
            if($ano%4==0)
                $dias = 28;
            else
                $dias=29;
            break;
    }
?>
<table>
    <thead>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miercoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
        <th>Sabado</th>
        <th>Domingo</th>
    </thead>
    <tbody>

   

        <?php  $k=0; $tf=false;
        for ($i=0; $i < 4; $i++) { ?>
            <tr>
            <?php for ($j=1+$k; $j <= 7+$k; $j++) { 
                if($j==$dias){
                    $tf=true;
                    break;
                }?>
                <td><?php echo $j; ?></td>
                <?php
            }
            $k+=7;
            if($tf==true)
                break;
            ?>
            </tr>
            <?php
        }?>

        
    </tbody>
</table>
</body>
</html>