<?php 
    class Calculadora{
        public $n1;
        public $n2;
        public $status;
        public $resultado;


        public function __construct($n1 = 0, $n2 = 0, $status='vazio', $resultado = 0)
        {
            $this->n1 = $n1;
            $this->n2 = $n2;
            $this->n2 = $status;
            $this->n2 = $resultado;

        }

        public $armazenamento = array();        

        public function somar($n1, $n2){
            $r = $this->resultado = $n1 + $n2;

            array_push($this->armazenamento, array(
                'n1' => $n1,
                'n2' => $n2, 
                'status' => 'soma',
                'resultado' => $r
            ));
        }

        public function multiplicar($n1, $n2){
            $r = $this->resultado = $n1 * $n2;

            array_push($this->armazenamento, array(
                'n1' => $n1,
                'n2' => $n2, 
                'status' => 'multiplicação',
                'resultado' => $r
                
            ));
        }

        public function dividir($n1, $n2){
            $r = $this->resultado = $n1 / $n2;

            array_push($this->armazenamento, array(
                'n1' => $n1,
                'n2' => $n2, 
                'status' => 'divisão',
                'resultado' => $r
                
            ));
        }

        public function subtrair($n1, $n2){
            
            $r = $this->resultado = $n1 - $n2;

            array_push($this->armazenamento, array(
                'n1' => $n1,
                'n2' => $n2, 
                'status' => 'subtração',
                'resultado' => $r
                
            ));
        }

        public function historico(){
        
            foreach ($this->armazenamento as $key => $hist) {
                echo '<br>';
                echo 'HISTORICO';
                echo '<br>';

                echo 'A ' . $hist['status'] . ' entre ' . $hist['n1'] . ' e ' . $hist['n2'] . ' é igual a: ' . $hist['resultado'];
            }
        }
    }
?>


