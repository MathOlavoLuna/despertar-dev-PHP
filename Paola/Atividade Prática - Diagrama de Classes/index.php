<?php 
    #1
    require('./2/format.php');
    require('./2/circle.php');
    require('./2/rectangle.php');


    require('./1/item.php');
    require_once('./1/pedido.php');

    $item = new Item(120, 'Controle', 'Controle de Xbox, pode ser usado no PC | Xbox');

    $pedido = $item->addItem($pedidos);
    var_dump($pedido);

    #2

    $rectangle = new Rectangle();
    $rectangle->desenhar();
    $rectangle->redimensionar(250, 100);
    $rectangle->desenhar();


    $circle = new Circle(100);
    $circle->desenhar();
    $circle->redimensionar(250);
    $circle->desenhar();

?>