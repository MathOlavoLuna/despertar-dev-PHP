<?php 
    class Conta {
        protected $saldo;
        protected $id;
        protected $credito;
        

        public function __construct($idParams, $creditoParams = 0, $saldoParams = 0)
        {
            $this->id = $idParams;
            $this->saldo = $saldoParams;
            $this->credito = $creditoParams;
        }

        public function deposito($valor){
            $this->saldo += $valor;
        }

        public function showSaldo(){
            return $this->saldo;
        }
        public function setCredito($valor){
            $this->credito += $valor;
        }
        public function getCredito(){
            return $this->saldo;
        }

        public function getId(){
            return $this->id;
        }
    }
    
?>