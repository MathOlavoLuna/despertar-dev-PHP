<?php 
    require('./ingresso.php');
    
    $normal = new Normal();
    $vip = new Vip();
    $camarote = new Camarote();

    $vip->imprimeValor();
    $normal->imprimeValor();
    $camarote->imprimeValor();
?>
