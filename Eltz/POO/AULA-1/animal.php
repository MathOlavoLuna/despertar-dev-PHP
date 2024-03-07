<?php 
    class Animal{
        public $tipo;
        public $especie;
        public $voa;
    
        public function __construct($tipo, $especie, $voa){
            $this-> tipo =  $tipo;
            $this-> especie = $especie;
            $this-> voa = $voa;
        }

        public function voar(){
            if($this->voa){
                echo 'voando..';
            } else {
                echo 'Este animal não voa.';
            }
        }

        public function mostrarDetalhe(){
            $voa = 'Sim';
            echo '<br>';
            echo '<br>';
            echo 'Detalhes do meu Animal:';
            echo '<br>';
            echo 'Tipo: ' . $this->tipo;
            echo '<br>';
            echo 'Especie:' . $this->especie;

            if(!$this->voa){
                $voa = "Não";
                echo '<br>';
                echo 'Voa: ' . $voa;
                return;
            } else {
                echo '<br>';
                echo 'Voa: ' . $voa;
            }
        }
    };
    
?>

