
<?php 
    class Contador{
        public $cont = 0;
        
        public function __construct($cont)
        {
            $this->cont = $cont;
        }

        public function zerar(){
            $this->cont = 0;
        }
        public function incrementar(){
            $this->cont += 1;
            
        }
        public function returnValor(){
            echo 'Valor do Contador: ' . $this->cont;
        }
    }
?>
