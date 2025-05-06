<div class="titulo">Argumento Retorno</div>

<?php
function mensagem(){
    return "Seja bem vindo!";
}

echo mensagem(); // posso puxar o return assim ou
$m = mensagem();
echo "<br>" , $m;
echo "<br>" , mensagem();

echo "<hr>";

function mensagemcomnome($nome){ //função com parametro
    return "Seja bem vindo {$nome}";

}
echo "<br>" , mensagemcomnome('Eros');
echo "<br>" , mensagemcomnome('Vinicius');

echo "<hr>";

function soma($a, $b){
    return $a + $b;
}

function multiplicar($a, $b){
    return $a * $b;
}

echo "<br>" , soma(2, 3);
echo "<br>" , soma(45, 45);
echo "<br>" , multiplicar(45, 3);

function novovalor($a, $novovalor){
    return $a = $novovalor;
}
$valor = 3;

novovalor($valor, 5);

echo "<br>" , $valor;

function trocanovovalor(&$a, $novovalor){
    return $a = $novovalor;
}
trocanovovalor($valor, 15);
echo "<br>" , $valor;

?>