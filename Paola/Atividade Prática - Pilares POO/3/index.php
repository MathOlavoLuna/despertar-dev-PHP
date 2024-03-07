<?php 
    require('./Animal.php');

    $cachorro = new Cachorro('Scooby', "UAUUAU");
    $cachorro->emitirSom();
    

    echo '<br>';
    echo '<br>';

    $cavalo = new Cavalo('Pézito', "URURURU");
    $cavalo->emitirSom();


    echo '<br>';
    echo '<br>';
    
    $gato = new Gato('yummy', "miau");
    $gato ->emitirSom();
?>