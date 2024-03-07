<?php 
    require('./EX01.php');
    require('./EX02.php');
    require('./EX03.php');
    require('./EX04.php');
    require('./EX05.php');
    require('./EX06.php');

    $num = new Contador(10);

    $num->incrementar();
    $num->incrementar();
    $num->incrementar();
    $num->zerar();
    $num->returnValor();


    #2
    $bola = new Bola('branca', 68, 'couro');

    $bola->mostrarCor();
    $bola->trocarCor('preta');
    $bola->mostrarCor();
    $bola->trocarCor('vermelha');
    $bola->mostrarCor();
    $bola->trocarCor('azul');
    $bola->mostrarCor();
    

    #3
    $contaCorrente = new ContaCorrente(01, 'Tereza');

    $contaCorrente->showAccountDetails();

    $contaCorrente->deposit(4800);
    $contaCorrente->wdMoney(800);
    

    #4
    $calc = new Calculadora();


    $calc->somar(5, 5);
    $calc->subtrair(10, 5);
    $calc->dividir(9, 3);
    $calc->multiplicar(9, 3);

    $calc->historico();

    #5
    $bomba = new BombaCombustivel('Gas', 5, 2000);

    $bomba->alterarQuantidadeCombustivel(50);
    $bomba->alterarCombustivel('Gasolina');
    $bomba->abastecerPorValor(20);
    $bomba->abastecerPorLitro(5);
    var_dump($bomba);


    #6
    $carro = new Carro(15);

    $carro->adicionarGas(20);
    $carro->obterGas();

    $carro->andar(100);



    $carro->obterGas();
?>