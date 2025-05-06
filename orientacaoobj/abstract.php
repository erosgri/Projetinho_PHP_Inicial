<div class="titulo">Classe Abstract</div>

<?php
    abstract class Abstrata {
        //reusar codigos por herança
        abstract public function metodo1();
        protected abstract function metodo2($parametro);

    }

    abstract class FilhaAbstrata extends Abstrata {
        public function metodo1(){
            echo 'Executando metodo 1 <br>';
        }

        public abstract function metodo3();
    }

    //algum momento preiso de uma classe concreta pra utilizar as classes

    class Concreta extends FilhaAbstrata {
        public function metodo1(){
            echo "Executando o método 1 extendido <br>";
            parent::metodo1();
            
        }
        //posso mudar o nivel de visibilidade desde que seja pra mais (public)
        protected function metodo2($parametro){
            echo "executar metodo 2 com o $parametro <br>";
        }

        public function metodo3(){
            echo "executando metodo 3<br>";
            $this->metodo2('Interno');
        }
    }

    $c = new Concreta();
    $c->metodo1();
    //$c->metodo2('Externo');
    $c->metodo3();

    echo "Fim";


?>