<?php 

    class Circle extends Format{
        public $raio;

        public function __construct($raioP = 50) {
            $this->raio = $raioP;
        }

        public function desenhar(){
            echo "<div style='width: $this->raio ; 
            height: $this->raio ;
            border-radius: 50%;
            background-color: rgb(90, 181, 255);'></div>";
        }

        public function redimensionar($width, $height=0)
        {
            echo 'Redimensionando!';
            $this->raio = $width;
        }
        

    }
?>