<?php 
    // Crie a classe Imovel, que possui um endereço e um preço.
    // a. crie uma classe Novo, que herda Imovel e possui um adicional
    // no preço. Crie métodos de acesso e impressão deste valor
    // adicional.
    // b. crie uma classe Velho, que herda Imovel e possui um desconto
    // no preço. Crie métodos de acesso e impressão para este
    // desconto.

    class Imovel{
        public $endereço;
        public $preço;

        public function __construct($endereço = '', $preço = 0) {
            $this->endereço = $endereço;
            $this->preço = $preço;
        }
    }

    class Novo extends Imovel{
        protected $valorAdicional;

        public function __construct($endereço, $preço, $valorAdicional = 0) 
        {
            $this->valorAdicional = $valorAdicional;
            parent:: __construct($endereço, $preço);
        }

        public function setValorAd($valorAdicional){
            $this->valorAdicional = $valorAdicional;
        }

        public function getValorAd(){
            return 'Valor Adicional é igual a: R$' . $this->valorAdicional . '<br> O preço do imovel mais o adicional é igual a: ' . $this->preço + $this->valorAdicional;
        }
    }

    class Velho extends Imovel{
        public $desconto = 50;

        public function setDesconto($desconto){
            $this->desconto = $desconto;
        }

        public function getDesconto(){  
            
            return "Desconto de $this->desconto %" . '<br> O valor Imovel mais o desconto é igual a R$: ' . $this->preço - (($this->desconto / 100) * $this->preço) . '<br><br>';
        }

        public function __construct($endereço, $preço) {
            parent:: __construct($endereço, $preço);
        }
    }
?>