<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $listaProdutos = array();

        function cadastrarProdutos($nome, $preco){
            global $listaProdutos;

            array_push($listaProdutos, array(
                'nome' => $nome,
                'preço' => $preco
            ));
        };

        function listaProdutos(){
            global $listaProdutos;

            foreach ($listaProdutos as $key => $produtos) {
                echo '<strong>'. $produtos['nome'] .'</strong>' . ':' . $produtos['preço'];
                echo '<br>';
                echo '<hr>';
            };
        };

        function excluir($name){
            global $listaProdutos;

            foreach ($listaProdutos as $key => $produtos) {
                if($produtos['nome'] == $name){
                    unset($listaProdutos[$key]);
                    echo 'Excluido com Sucesso!';
                    echo '<br>';
                    echo '<hr>';
                    listaProdutos();
                }
            };
        }


        cadastrarProdutos('Iphone 15', 10000);
        cadastrarProdutos('PS5', 4000);
        cadastrarProdutos('PC', 5000);
        cadastrarProdutos('Caneta', 8);
        listaProdutos();
        excluir('Caneta');

    ?>
</body>
</html>
