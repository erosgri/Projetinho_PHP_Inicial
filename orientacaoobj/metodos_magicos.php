<div class="titulo">Métodos Magicos</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome,$idade){
        echo 'Construtor Invocado <br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo "Morreu ";
    }

    public function __toString(){
        return "{$this->nome} tem {$this->idade} anos.";
    }
    public function apresentar(){
        echo $this . "<br>";
    }
    public function __get($atributo){
        echo "Lendo Atributos nao declarados {$atributo}<br>";
        return "Atributo {$atributo} não declarado";
    }

    public function __set($atributo, $valor){
        echo "alterando atributo nao declarado: {$atributo} / {$valor} <br>";
    }
    public function __call($metodo,$parametros){
        echo "Tentando executar métodos {$metodo} <br>";
        echo "<br>, com os parametros: ";
        print_r($parametros);
    }
}
//alterando atributos!!
$pessoa = new Pessoa('Eros' , 40);
$pessoa->apresentar(); //chamando toString
echo $pessoa, '<br>'; //chamando tosTring
$pessoa->idade = 33;
$pessoa->nome = 'Reinaldo'; //chamando toString


$pessoa->apresentar();//chamando diretamente

echo '<hr>';

$pessoa->religiao = 'Satanista'; //chamando set
$pessoa->religiao; //chamando set
echo '<br>' , $pessoa->nome , '<br>'; //acessa o atributo diretamente sem o get

$pessoa->exec(1 , 'teste', true); //chamando call

$pessoa = null; //destruct



?>