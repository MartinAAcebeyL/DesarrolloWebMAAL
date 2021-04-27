<?php
    class Estante{
        private $fila1;
        private $fila2;
        private $fila3;
        private $tope1;
        private $tope2;
        private $tope3;


        function __construct(){
            $fila1 =array();
            $fila2 =array();
            $fila3 =array();
            $this->tope1=0;
            $this->tope2=0;
            $this->tope3=0;
        }
        
        function insertarLibro($fila, $libro){
            switch ($fila) {
                case 1:
                    $this->fila1[$this->tope1] = $libro;
                    $this->tope1++;
                    break;
                case 2:
                    $this->fila2[$this->tope2] = $libro;
                    $this->tope2++;
                    break;
                case 3:
                    $this->fila3[$this->tope3] = $libro;
                    $this->tope3++;
                    break;
            }
        }

        function EliminaLibro($fila){
            switch ($fila) {
                case 1:
                    if($this->tope1 <= 0)
                        echo "fila vacia no se puede eliminar mas";
                    else
                        $this->tope1--;
                    break;
                case 2:
                    if($this->tope2 <= 0)
                        echo "fila vacia no se puede eliminar mas";
                    else
                        $this->tope2--;
                    break;
                case 3:
                    if($this->tope3 <= 0)
                        echo "fila vacia no se puede eliminar mas";
                    else
                        $this->tope3--;
                    break;
            }
        }

        function mostrar($fila){
            switch ($fila) {
                case 1:
                    if($this->tope1 <= 0){
                        echo "lista vacia";
                        return;
                    }
                    for ($i=0; $i < $this->tope1; $i++) { 
                        echo $this->fila1[$i]." ";
                    }
                    break;
                case 2:
                    if($this->tope2 <= 0){
                        echo "lista vacia";
                        return;
                    }
                    for ($i=0; $i < $this->tope2; $i++) { 
                        echo $this->fila2[$i]." ";
                    }
                    break;
                case 3:
                    if($this->tope3 <= 0){
                        echo "lista vacia";
                        return;
                    }
                    for ($i=0; $i < $this->tope3; $i++) { 
                        echo $this->fila3[$i]." ";
                    }
                    break;
            }
        }

        function mostrararmario(){
            for ($i=1; $i <= 3; $i++) { 
                $this->mostrar($i);
                echo "<br>";
            }
        }
    }

    $p=new Estante();
    #insertando
    $p->insertarLibro(1,"holas");
    $p->insertarLibro(1,"como");
    $p->insertarLibro(1,"estas");

    $p->insertarLibro(2,"holas2");
    $p->insertarLibro(2,"como2");
    $p->insertarLibro(2,"estas2");

    $p->insertarLibro(3,"holas3");
    $p->insertarLibro(3,"como3");
    #mostrando
    for ($i=1; $i < 4 ; $i++) { 
        $p->mostrar($i); echo "<br>";
    }
    echo "<br>";
    echo "<br>";
    #eliminando
    $p->EliminaLibro(2);
    $p->EliminaLibro(3);
    $p->EliminaLibro(3);
    $p->EliminaLibro(3);
    #mostrando
    echo "<br>"; echo "<br>";
    for ($i=1; $i < 4 ; $i++) { 
        $p->mostrar($i); echo "<br>";
    }
    echo "<br>"; echo "<br>";
    #mostrando todo
    $p->mostrararmario();

?>