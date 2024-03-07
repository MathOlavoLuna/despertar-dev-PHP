<?php 
require('./conta.php');
require('./conta-kids.php');

$conta1 = new Conta(1);

$conta1->deposito(5454);
$conta1 -> setCredito(1000);
$conta1 -> getCredito();

echo $conta1->showSaldo();
echo '<br>';

$contaKids = new ContaKids(16, $conta1->getId(), 1);

$contaKids->depositoKids(100);
echo $contaKids->showSaldo();
?>