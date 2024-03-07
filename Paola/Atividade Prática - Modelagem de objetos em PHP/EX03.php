<?php 
    class ContaCorrente{
        public $accountNumber; 
        public $accountOwnerName; 
        public $accountBalance; 

        public function __construct($accountNumber, $accountOwnerName, $accountBalance = 0)
        {   
            $this->accountNumber = $accountNumber;
            $this->accountOwnerName = $accountOwnerName;
            $this->accountBalance = $accountBalance;
        }


        public function changeOwnerName($accountOwnerName){
            $this->accountOwnerName = $accountOwnerName;
            echo '<br>';
            echo 'Nome Alterado para:  ' . $accountOwnerName;
            echo '<br>';
        }

        public function deposit($accountBalance){
            echo 'Depositando...';
            echo '<br>';
            echo 'Saldo Antes do Depósito: ' . $this->accountBalance;
            echo '<br>';
            echo '<br>';
            
            $this->accountBalance += $accountBalance;

            echo 'Saldo Pós-Depósito: ' . $this->accountBalance;
            echo '<br>';
            echo '<br>';
            echo '----------------------------';
            echo '<br>';
            
            
        }

        public function wdMoney($accountBalance){
            echo 'Sacando....';
            echo '<br>';
            echo 'Saldo Antes do Saque: ' . $this->accountBalance;
            echo '<br>';
            echo '<br>';

            $this->accountBalance -= $accountBalance;
            
            echo 'Saldo Pós-Saque: ' . $this->accountBalance;
            echo '<br>';
            echo '<br>';
            echo '----------------------------';
            echo '<br>';

        }

        public function showAccountDetails(){
            echo '<br>';
            echo '----------------------------';
            echo '<br>';
            echo 'ID da Conta:  ' . $this->accountNumber;
            echo '<br>';
            echo 'Conta de:  ' . $this->accountOwnerName;
            echo '<br>';
            echo 'Saldo Total:  ' . $this->accountBalance;
            echo '<br>';
            echo '----------------------------';
            echo '<br>';
            echo '<br>';
        }
    }
?>