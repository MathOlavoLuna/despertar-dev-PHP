<?php 
    class ContaKids extends conta{ 
        public $idade;
        public $idKidsParams;
        public $contador;

        public function __construct($idadeParams, $idContaParams, $idKidsParams)
        {
            $this->idade = $idadeParams;
            $this->idKidsParams = $idKidsParams;
            

            parent::__construct($idContaParams);
        }

        public function depositoKids($valorParams){
            $this->contador += 1;

            parent::deposito($valorParams);
        }
    }

?>