<?php 
    class Bola{
        public $cor;
        public $circunferencia;
        public $material;

        public function __construct($cor, $circunferencia, $material)
        {
            $this->cor = $cor;
            $this->circunferencia = $circunferencia;
            $this->material = $material;
        }

        public function trocarCor($cor){
            $this->cor = $cor; 
            echo '<br>';
            echo '<br>';
            echo 'Cor alterada para: ';
        }

        public function mostrarCor(){
            echo '<br>';
            echo '<br>';
            echo $this->cor;
        }
    }
?>