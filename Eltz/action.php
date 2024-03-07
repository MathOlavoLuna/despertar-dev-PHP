<?php
if(! session_id()){
    session_start();
}; 

if(! isset($_SESSION['arrayzao'])){ //isset verifica se já foi setado algo, nesse caso, se a lista não for setada, no caso ela não exista ela será criada, se não, não.
    var_dump('Criando lista....');
    $_SESSION['arrayzao'] = array();
};

// código de cima, verifica se a sessão existe, se não existir ele cria um novo.

$nome = $_POST['name']; // o post sempre pega o valor pelo 'NAME' do input
$idade = $_POST['idade'];

$pessoa = array(
    'nome' => $nome,
    'idade' => $idade
);

array_push($_SESSION['arrayzao'], $pessoa);

foreach ($_SESSION['arrayzao'] as $key => $value) {
    echo 'Nome:' . $value['nome'] . '  Idade: ' . $value['idade'];
    echo '<br>';
    echo '<hr>';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./reset.php">limpar</a>
</body>
</html>

