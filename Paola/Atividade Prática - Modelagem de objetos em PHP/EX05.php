<?php 
    class BombaCombustivel{
        public $tipoCombustivel;
        public $valorLitro;
        public $quantidadeCombustivel;

        public function __construct($tipoCombustivel = 'Gasolina', $valorLitro = 5, $valorCombustivel = 1000)
        {
            $this->tipoCombustivel = $tipoCombustivel;
            $this->valorLitro = $valorLitro;
            $this->quantidadeCombustivel = $valorCombustivel;
        }

        public function alterarCombustivel($tipoCombustivel){
            $this->tipoCombustivel = $tipoCombustivel;
            echo '<br>';
            echo '<br>';
            echo 'Tipo de Combustivel alterado!';
        }
        
        public function abastecerPorValor ($valor){
            $pagar = $valor / $this->valorLitro;
            $this->alterarQuantidadeCombustivel($pagar);
            echo '<br>';
            echo '<br>';
            echo "Com $valor você recebe $pagar litros de $this->tipoCombustivel";
        }
        public function abastecerPorLitro($litros){
            $pagar = $litros * $this->valorLitro;
            $this->alterarQuantidadeCombustivel($litros);
            echo '<br>';
            echo '<br>';
            echo "Você quer $litros de $this->tipoCombustivel , custará $pagar R$ ";
        }

        public function alterarValor($nvValor){
            $this->valorLitro = $nvValor;
            echo '<br>';
            echo '<br>';
            echo 'Valor do litro atualizado!';
        }


        public function alterarQuantidadeCombustivel($nvCombustivel){
            $this->quantidadeCombustivel -= $nvCombustivel;

            echo '<br>';
            echo '<br>';
            echo "Alterando estoque de $this->tipoCombustivel!";
        }
    }
?>