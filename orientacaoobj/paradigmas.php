<div class="titulo">Paradigmas</div>

<h2>Procedural:</h2>

<h3>Baseada em Procedimentos de Funçoes</h3>
<h3>O foco está em ações e rotinas sequenciais</h3>
<h3>Os dados e as funções são separados</h3>
<h3>Ideal para programas simples e scripts menores</h3>
<h3>Exemplo:</h3>

<h3>function soma($a,$b){</h3>
<h3>return $a + $b;</h3>   
<h3>};</h3>
<h3>echo soma(2,3);</h3>

<?php
function soma($a,$b){
    return $a + $b;
};
echo soma(2,3);

?>

<h2>Objetos Orientados:</h2>
<h3>Baseada em objetos, que são instâncias de classes</h3>
<h3>O foco está em modelar o mundo real, usando dados (atributos) e comportamentos (métodos) juntos</h3>
<h3>Favorece reutilização, organização e manutenção de código em sistemas maiores</h3>
<h3>Exemplos: vs code</h3>

<?php
class Pessoa {
    public $nome;
    public $idade; 

    function __construct($novonome, $idade){
        echo 'Construtor<br>';
        $this->nome = $novonome;
        $this->idade = $idade;
    }

   
    public function apresentar(){
        echo "{$this->nome} , {$this->idade}";
    }

}

$pessoa = new Pessoa('Eros Grigolli', 33);
$pessoa->apresentar();
?>
