<div class="titulo">Modificador Final</div>

<?php

abstract class Abstrata {
    abstract public function metodo1();

    final public function metodo2(){
        echo 'Nao vou mudar<br>';
    }
}

class Classe extends Abstrata {
    public function metodo1(){
        echo 'Executando metodo1<br>';
    }

   // public function metodo2(){
     //   echo 'Executando metodo 2';
    //}

}
$classe = new Classe();
$classe->metodo1();
$classe->metodo2();

final class Unica {
    public $atributo = "Valor";
}

$unica = new Unica();
echo $unica->atributo;



?>