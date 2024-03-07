<?php 
    require('./Imovel.php');

    $imovelNovo = new Novo('Rua Angola', 200);

    $imovelVelho = new Velho('Rua Tavare', 300);

    $imovelNovo->setValorAd(50);
    $imovelVelho->setDesconto(15);

    echo $imovelVelho->getDesconto();
    echo $imovelNovo->getValorAd();
?>