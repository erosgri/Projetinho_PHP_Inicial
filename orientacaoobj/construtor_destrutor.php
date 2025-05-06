<div class="titulo">Construtor & Destrutor</div>

<?php
class Pessoa {
    public $nome;
    public $idade; 

    function __construct($novonome, $idade){
        echo 'Construtor<br>';
        $this->nome = $novonome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo '<br>E morreu<br>';
    }

    public function apresentar(){
        echo "{$this->nome} , {$this->idade}";
    }

}

$pessoa = new Pessoa('Vinicius Troiano', 29);
$pessoa->apresentar();

unset($pessoa);//chamar o destrutor

$pessoa1 = new Pessoa('Vini Troiano', 39);
$pessoa1->apresentar();
$pessoa1 = null;//outra forma de chamar o destrutor






?>