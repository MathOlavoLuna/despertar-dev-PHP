<?php 

    class Rectangle extends Format{
        public $width;
        public $height;


        public function __construct($widthP = 100, $heightP = 50) {
            $this->width = $widthP;
            $this->height = $heightP;
        }

        public function desenhar(){
            echo "<div style='width: $this->width;
            height: $this->height; 
            background-color: rgb(50, 181, 255);'></div>";
        }

        public function redimensionar($width, $height)
        {
            echo 'Redimensionando!';
            $this->width = $width * 2;
            $this->height = $height;
        }
        

    }
?>