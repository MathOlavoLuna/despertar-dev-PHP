
<?php 
    
    abstract class Animal {
        public $nome;

        public function __construct($nome)
        {
            $this->nome = $nome;
        }

        abstract function emitirSom();
    }

    class Cachorro extends Animal{
        public $som;

        public function __construct($nome, $som) {
            $this->nome = $nome;
            $this->som = $som;
        }

        public function emitirSom()
        {
            echo 'O cachorro ' . $this->nome, ' Faz esse barulho: ' . $this->som;
        }
    }
    class Gato extends Animal{
        public $som;

        public function __construct($nome, $som) {
            $this->nome = $nome;
            $this->som = $som;
        }

        public function emitirSom()
        {
            echo 'O Gato ' . $this->nome, ' Faz esse barulho: ' . $this->som;
        }
    }
    class Cavalo extends Animal{
        public $som;

        public function __construct($nome, $som) {
            $this->nome = $nome;
            $this->som = $som;
        }

        public function emitirSom()
        {
            echo 'O Cavalo ' . $this->nome, ' Faz esse barulho: ' . $this->som;
        }
    }


?>