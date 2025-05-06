<div class="titulo">Polimorfismo</div>


<?php
abstract class Comida{
    public $peso;
}

class Arroz extends Comida {
    
}

class Arrozdoce extends Arroz {
    
}

class Feijao extends Comida {

}

class Sorvete extends Comida {

}

class Pessoa {
    public $peso;


    function __construct($peso){
        $this->peso = $peso;
    }

    public function comer(Arroz $comida){
        $this->peso += $comida->peso;
    }
}

$c1 = new Arroz();
$c1->peso = 0.95;

$c2 = new Arrozdoce();
$c2->peso = 0.666;

$p = new Pessoa(83.45);
$p->comer($c1);
$p->comer($c2);

echo $p->peso , '<br>';


?>