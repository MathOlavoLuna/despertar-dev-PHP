<?php 

    class Reports{
        public function printBalance(Wallet $wallet){
            print "<h1> COD: " . $wallet->cod . "</h1>";
            print "<h1> Cliente: " . $wallet->nameClient . "</h1>";
            print "<h1> Saldo: " . $wallet->getBalance() . "</h1>";
        }
    }
?>