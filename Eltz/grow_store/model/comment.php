<?php
require_once('./utils/next_id.php');

class Comment
{
    private $id;
    private $createdAt;
    private $content;
    private $userId;
    public $productId;
    public $score;

    public function __construct($createdAtP, $contentP, $productIdP, $scoreP)
    {
        $this->id = createId();
        $this->createdAt = $createdAtP;
        $this->content = $contentP;
        $this->productId = $productIdP;
        $this->score = $scoreP;
    }

    public function add($commentData)
    {
        array_push($commentData, $this);
        return $commentData;
    }

    public function getId(){
        return $this->id;
    }

    public function editComent($idP, $commentData, $newContent){
        foreach ($commentData as $key => $coments) {
            if($idP == $coments->id){
                $coments->content = $newContent;
            }
        }
    }

    public static function show($idP, $commentData)
    {
        $filtered = array_values(array_filter($commentData, function ($item) use ($idP) {
            return $item->id == $idP; 
        })
    );

    var_dump($filtered);

                
        if ($filtered) {
            echo "Conteúdo: " . $filtered[0]->content . "<br>";
            echo "Data: " . $filtered[0]->createdAt . "<br>";
            echo "Avaliação: " . $filtered[0]->score . "<br>";
            echo "ID:" . $filtered[0]->id . "<br>";
        
        } else {
            echo "Comentário não encontrado.";
        }
    }

    public static function delete($commentData,$idP)
    {
        foreach ($commentData as $key => $comment) {
            if($comment->id==$idP){
                unset($commentData[$key]);
                return $commentData;
            }
        }
        
    }

    public static function list($userData)
    {
        echo "Lista de comentários<br><hr>";
        foreach ($userData as $value) {
            echo "Conteúdo: " . $value->content . "<br>";
            echo "Data: " . $value->createdAt . "<br>";
            echo "Avaliação: " . $value->score . "<br>";
            echo "ID: " . $value->id . "<br> <hr>";
            
        }
    }
}
