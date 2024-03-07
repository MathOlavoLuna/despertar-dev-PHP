<?php 
    abstract class Ingresso{
        protected $valor;

        public function __construct($valor = 30){
            $this->valor = $valor;
        }

        public abstract function imprimeValor();

    };


    class Normal extends Ingresso{

        public function __construct($valor = 30)
        {
            parent::__construct($valor);
            
        }
    
        public function imprimeValor(){
            echo "Valor normal do Ingresso: R$ $this->valor";
            echo '<br>';
        }
    };
    

    class Vip extends Ingresso{
        public $valorAdicional = 15;


        public function __construct($valor = 30, $valorAdicional = 15)
        {   
            $this->valorAdicional = $valorAdicional;
            
            parent::__construct($valor);
            
        }
        
        public function imprimeValor(){
            echo "Valor Ingresso VIP: R$" . $this->valor + $this->valorAdicional;
            echo '<br>';
        }
    };

    class Camarote extends Ingresso{
        public $valorAdicional;

        public function __construct($valor = 30, $valorAdicional = 25)
        {
            $this->valorAdicional = $valorAdicional;
            parent::__construct($valor);
            
        }

        public function imprimeValor(){
            echo "Valor Ingresso Camarote: R$" . $this->valor + $this->valorAdicional;
            echo '<br>';
        }
    };
