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
        for ($i=0; $i <= $this->n; $i++) { 
            $r+=$i;
        }
		return $r;
	}

	function Diagonal(){
		$tamano = strlen($this->cadena);
        $filas = $tamano;
        $columnas = $tamano;
        echo "<table border='1' class='tab'>";
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