<?php

class finall {
	private $n;
	private $cadena;

	function __construct($n,$cadena){
		$this->n=$n;
		$this->cadena=$cadena;
	}

	function calcularSumatoria(){
        $r = 0;
        for ($i=1; $i <= $this->n; $i++) {
            echo $i;
            if ($i< $this->n)
                echo '+';
            $r+=$i;
        }
		echo '='.$r;
	}

	function Diagonal(){
		$tamano = strlen($this->cadena);
        $filas = $tamano;
        $columnas = $tamano;
        echo "<table border='1' class='table table-bordered border-primary'>";
            //$auxi_var = 0;
            for($i=0;$i<$filas;$i++){
                echo "<tr>";
                for($j=0;$j<$columnas;$j++){
                    if ($j == $i){
                        echo "<td style='background-color: blue;'>".$this->cadena[$i]."</td>";
                        
                    }else{
                        echo "<td >&nbsp&nbsp&nbsp&nbsp</td>";
                    }
                }
                echo "</tr>";
            }

        echo "</table>";
	}
}


?>