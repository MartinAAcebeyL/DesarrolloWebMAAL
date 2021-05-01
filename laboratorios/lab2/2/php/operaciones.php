<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style/style.css">
    <title>Document</title>
</head>
<body>
<?php
    class operaciones {
        private $a;
        private $b;
        private $c;

        function __construct($_a, $_b, $_c){
            $this->a=$_a;
            $this->b=$_b;
            $this->c=$_c;
        }

        function multiplicaion(){
            return $this->a*$this->b*$this->c;
        }

        function menor(){
            $a = array($this->a,$this->b,$this->c);
            $min = 9999999;
            for ($i=0; $i < 3; $i++) { 
                if ($a[$i]<$min ) 
                    $min = $a[$i];
            }
            return $min;
        }

        function mostrar(){
            echo "<table border='1'";
            echo "<tr> 
                    <td class='orange'>Valor de A:</td>
                    <td class='orange'>Valor de B:</td>
                    <td class='orange'>Valor de C:</td>
                </tr>";
            echo "<tr>
                <td>$this->a</td>
                <td>$this->b</td>
                <td>$this->c</td>
                </tr>";
            echo "</table>";

            echo "<table border='1' class='table2'";
            echo "<tr>
                    <td class='orange'>Multiplicacion: </td>";
                echo "<td>".$this->multiplicaion()."</td>";
                echo "</tr>";
            echo "<tr> 
                <td class='orange'>Menor</td>";
            echo "<td>".$this->menor()."</td>";
            echo "</tr>";
            echo "</table>";
        }
    }
    
?>    
</body>
</html>

