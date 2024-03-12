<?php 
    Class Item{
        public $valor;
        public $nome;
        public $descricao;

        public function __construct($valorP, $nomeP, $descricaoP) {
            $this->valor = $valorP;
            $this->nome = $nomeP;
            $this->descricao = $descricaoP;
        }

        public function addItem($pedidosData){
            array_push($pedidosData, $this);
            return $pedidosData;
        }

    }
?>