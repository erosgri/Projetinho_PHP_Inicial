<div class="titulo">Desafio</div>

<?php
interface Template {
    function metodo1();
    public function metodo2($parametro);

}

abstract class ClasseAbstrata implements Template {
    function metodo1(){
        echo 'executando metodo1 <br>';
    }
    public function metodo2($parametro){
        echo "Executar metodo 2 $parametro";
    }
}

class Classe extends ClasseAbstrata{    
    function __construct($parametro) {
       

    }
    public function metodo3(){
        echo "executar o metodo 3";
    }
    function metodo1(){
        echo 'executando metodo1 <br>';
    }
    public function metodo2($parametro){
        echo "Executar metodo 2 $parametro";
    }
}

$exemplo = new Classe('...');
$exemplo->metodo3();



?>