<div class="titulo">Classe de objetos</div>

<?php
class Cliente {
    //atributos
    public $nome = 'Anonimo';
    public $idade = 18;

    public function apresentar(){
        echo "Nome: {$this->nome},  Idade: {$this->idade}<br>";
        
    }
}
$c1 = new Cliente();
$c1->nome = 'Eros';
$c1->idade = 33;
$c1->apresentar();

$c2 = new Cliente();
$c2->nome = 'João';
$c2->idade = 26;
$c2->apresentar();

$c3 = new Cliente();
$c3->nome = 'Renato';
$c3->idade = 18;
$c3->apresentar();





?>