<?php 
    class Gato extends Animal{
        public $nome;

        public function __construct($nome, $tipo, $especie, $voa){
            $this->nome = $nome;

            parent::__construct($tipo, $especie, $voa);
        }

        public function miau(){
            echo '<br>';
            echo '<br>';
            echo 'MIAUUUUUUUUUUUUUUU';
        }

        public function chamar(){
            echo '<br>';
            echo '<br>';
            echo 'pspspspspspsps';
        }
        
    }
?>