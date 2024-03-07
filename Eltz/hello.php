<?php 
    $numero = 5;
    $inicio = 'Iniciamos o PHP, Growdevers';

    function dobro($parametro){
        echo $parametro * 2;
    }

    function alerta(){
        echo "<script> alert('CARALHOO') </script>";
    }
    
    // $arrayzao = array();

    // $pessoa = array(
    //     'nome' => 'Lunar',
    //     'idade' => '20' 
    // );
    // $pessoa1 = array(
    //     'nome' => 'Liv',
    //     'idade' => '20' 
    // );
    // $pessoa2 = array(
    //     'nome' => 'Douglas',
    //     'idade' => '20' 
    // );

    // array_push($arrayzao, $pessoa1);
    // array_push($arrayzao, $pessoa);
    // array_push($arrayzao, $pessoa2);

    // for ($i=0; $i < count($arrayzao); $i++) { 
    //     echo $arrayzao[$i] ['nome'];
    //     echo '<br>';
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?php echo $inicio  ?></h1>

    <form action="action.php" method="post">
        <label for="name"></label>
        <input type="text" name="name" id="name" >
        <input type="text" name="idade" id="idade">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>