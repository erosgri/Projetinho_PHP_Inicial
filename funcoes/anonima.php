<div class="titulo">Função Anônimas</div>


<?php
$soma = function($a , $b){
    return $a + $b;

};

echo $soma(2,3) , "<br>";

function executar($a, $b, $op, $funcao){
    $resultado = $funcao($a,$b);
    echo "$a $op $b = $resultado <br>";
}
echo "Soma: ";
executar (5,3,'+',$soma);


$multiplicacao = function($a,$b){
    return $a * $b;
};

echo "Multiplicação: ";
executar(5 , 3, '*', $multiplicacao);

function divisao($a , $b){
    return $a / $b;
}
echo "Divisão: ";
executar(15 , 3, '/', 'divisao');


?>