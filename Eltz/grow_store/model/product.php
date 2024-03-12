<?php
require_once("./utils/next_id.php");

class Product
{
    public $id;
    public $name;
    public $description;
    public $price;
    public $score;
    public $available;

    public function __construct($nameP, $descriptionP, $priceP, $scoreP, $availableP = true)
    {
        $this->id = createId();
        $this->name = $nameP;
        $this->description = $descriptionP;
        $this->price = $priceP;
        $this->score = $scoreP;
        $this->available = $availableP;
    }

    public function add($productData)
    {
        array_push($productData, $this);
        return $productData;
    }

    public static function list($productData)
    {
        echo "Lista de usuários<br><hr>";
        foreach ($productData as $value) {
            echo "Nome: " . $value->name . "<br>";
            echo "Preço: " . $value->price . "<br>";
            echo "Descrição: " . $value->description . "<br>";
            echo 'Disponível: ' .  $value->available ? "Em Estoque!" : "Em falta!" . "<br>";
            echo "<br><hr>";
        }
    }

    public static function show($idP, $productData)
    {
        $filtered = array_filter($productData, function ($item) use ($idP) {
            return $item->id == $idP;
        });
                
        if ($filtered) {
            echo "Nome: " . $filtered[0]->name . "<br>";
            echo "Preço: " . $filtered[0]->price . "<br>";
            echo "Estoque: " . $filtered[0]->available ? "Em Estoque!" : "Em falta!" . "<br>";
            echo "<br><hr>";
        } else {
            echo "Produto não encontrado.";
        }
}
}