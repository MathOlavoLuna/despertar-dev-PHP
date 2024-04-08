<?php

class Wallet{
    public $cod;
    public $nameClient;
    private $balance;

    public function __construct($name, $balance = 0) {
        $this->nameClient = $name;
        $this->balance = $balance;
        $this->cod = $this->generateCod();
    }

    public function generateCod(){
        $this->cod = time();
    }

    public function getBalance(){
        return $this->balance;
    }

    public function setBalance(float $value){
        $this->balance = $value;
    }
}