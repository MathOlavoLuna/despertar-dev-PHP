<?php

$listaCarros = array();

function cadastraCarro($marca, $modelo){
    global $listaCarros;
    array_push($listaCarros, array(
        'marca' => $marca,
        'modelo' => $modelo
    ));

    
    var_dump($listaCarros);
    
}

function listarCarros(){
    global $listaCarros;

    foreach($listaCarros as $key => $carro){

        echo '<h3> Modelo:' . $carro['modelo'] . '</h3>';
        echo '<h4> Marca:' . $carro['marca'] . '</h4>';
        echo '<br>';
        echo '<hr>';
        
    };
};

cadastraCarro('FORD', "FOCUS");
cadastraCarro('VW', "Nivus");
cadastraCarro('Fiat', "Uno");
cadastraCarro('Honda', "Civic");

listarCarros();
?>