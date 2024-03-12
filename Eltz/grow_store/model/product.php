<?php
require_once('./utils/next_id.php');

class Product
{
    private $id;
    private $name;
    private $description;
    private $price;
    private $available;
    private $score;

    public function __construct($nameP, $descriptionP, $priceP,$available = true, $scoreP=0)
    {
        $this->id = createId();
        $this->name = $nameP;
        $this->description = $descriptionP;
        $this->price = $priceP;
        $this->available = $available;
        $this->score=$scoreP; 
    }

    public function add($productData)
    {
        array_push($productData, $this);
        return $productData;
    }

    public function getId(){
        return $this->id;
    }
    public function update()
    {
    }

    public static function show($idP, $productData)
    {
        $filtered = array_values(array_filter($productData, function ($item) use ($idP) {
            return $item->id == $idP; 
        })
    );

    var_dump($filtered);

                
        if ($filtered) {
            echo "Nome: " . $filtered[0]->name . "<br>";
            echo "Descrição " . $filtered[0]->description . "<br>";
            echo "Preço: " . $filtered[0]->price . "<br>";
            echo $filtered[0]->available ? "Status: Disponível!" : "Status: Indisponível!" . "<br>";
            echo "<br><hr>";
        } else {
            echo "Produto não encontrado.";
        }
    }

    public function delete($idP)
    {
    }

    public static function list($userData)
    {
        echo "Lista de produtos:<br><hr>";
        foreach ($userData as $value) {
            echo "Nome: " . $value->name . "<br>";
            echo "E-mail: " . $value->email . "<br>";
            echo $value->active ? "Status: Ativo!" : "Status: Inativo!" . "<br>";
            echo "<br><hr>";
        }
    }

    public static function getScore($arrayComents, $productID, $productData){
        $total=0;
        $cont=0;
        foreach ($arrayComents as $value) {
            if ($value->productId==$productID) {
                $total+=$value->score;
                $cont++;
            }
        }

        $filtered = array_values(array_filter($productData, function ($item) use ($productID) {
            return $item->id == $productID; 
        }));

        if ($filtered) {
            $filtered[0]->score =$total/$cont;
        }
    }
    

}
