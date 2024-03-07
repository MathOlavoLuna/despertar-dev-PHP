<?php 
    require('./animal.php'); #import
    require('./cachorro.php');
    require('./gato.php');

    $animal = new Animal('carnivoro', 'dinossauro', false);
    $animal2 = new Animal('Herbivoro', 'ave', true);

    $animal->mostrarDetalhe();
    $animal2->mostrarDetalhe();

    $scooby = new Cachorro('Scooby', 'hibrido', 'vira-lata', false);

    $fred = new Gato('Fred', 'hibrido', 'malhado', false);

    echo '<br>';
    echo $scooby->nome;
    echo '<br>';
    $scooby->mostrarDetalhe();

    echo '<hr>';

    echo '<br>';
    echo $fred->nome;
    echo '<br>';
    $fred->mostrarDetalhe();

    $fred->miau();
    $fred->chamar();
?>  