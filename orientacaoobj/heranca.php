<div class="titulo">Herança</div>

<?php

class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome,$idade){
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa criada <br>';
    }

    function __destruct(){
        echo "<br>Fim do destrutor da classe pessoa<br>";
    }
    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

class Usuario extends Pessoa {
    public $login;


    function __construct($nome,$idade,$login){
        //$this->nome = $nome;
        //$this->idade = $idade;
        parent::__construct($nome, $idade);//chamar o construtor da classe mãe
        $this->login = $login;
        echo '<br>Usuario Criado: <br>';
    }
    function __destruct(){
        echo "Usuario tchau destrutor da classe usuario";
    }
    public function apresentar(){
        echo "@{$this->login}: !!!!";
        parent::apresentar();//para chamar da classe mae pessoa
        //echo "@{$this->login}: , {$this->nome}, {$this->idade} anos <br>";
        parent::__destruct();//chamar o destrutor
    }
}

$usuario = new Usuario('Eros Grigolli', 21, 'eros_gri');
$usuario->apresentar();
unset($usuario);






?>