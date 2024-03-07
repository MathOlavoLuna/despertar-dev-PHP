<?php 
    class Carro{
        public $andaPorLitro;
        public $kmPercorrido;
        public $gasolina;

        public function __construct($andaPorLitro, $kmPercorrido = 0, $gasolina = 0)
        {
            $this->andaPorLitro = $andaPorLitro;
            $this->kmPercorrido = $kmPercorrido;
            $this->gasolina = $gasolina;
        }

        public function adicionarGas($gasolina){
            $this->gasolina += $gasolina;
            echo '<br>';
            echo '<br>';
            echo 'Abastecido!';
        }

        public function andar($kmPercorrido){
            $litrosNecessarios = $kmPercorrido / $this->andaPorLitro;
            if($litrosNecessarios <= $this->gasolina){
                echo '<br>';
                echo '<br>';
                echo 'ANDANDO!!';
                $this->gasolina -= $litrosNecessarios;
                echo '<br>';
                echo '<br>';
                echo "Gastaremos cerca de $litrosNecessarios litros para percorrer $kmPercorrido Km e seu carro faz 1km utilizando $this->andaPorLitro litros de gasolina";
                echo '<br>';
            } else {
                echo '<br>';
                echo '<br>';
                echo 'ABASTEÇA SEU CARRO ANTES!!!';
            }
            
            
            
        }

        public function obterGas(){
            echo '<br>';
            echo '<br>';
            echo 'Quantia de Gasolina Atul:';
            echo "$this->gasolina litros";
        }
    }

?>