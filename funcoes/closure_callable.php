<div class="titulo">Closure & Callable</div>
<?php
$soma = function($a , $b){
    return $a + $b;
};

//apontar para uma função

echo $soma(3,2), '<br>';
echo (is_callable($soma) ? 'Sim' : 'Não') , '<br>';


function soma1($a , $b){
    return $a + $b;
};

echo soma1(3,3) , '<br>';
var_dump($soma);

echo (is_callable('soma1') ? 'Sim' : 'Não') , '<br>';

function executar($a, $b, $op, Callable $funcao){
    $resultado = $funcao($a,$b);
    echo "$a $op $b = $resultado <br>";
}

echo '<hr>';
executar(2,3,'+',$soma);
executar(2,3,'+','soma1');

function executar2($a, $b, $op, Closure  $funcao){
    $resultado = $funcao($a,$b);
    echo "$a $op $b = $resultado <br>";
}

echo '<hr>';
echo '<hr>';
executar2(2,3,'+',$soma);
executar2(2,3,'+','soma1');//nao vai dar certo pois uma funcção definida dessa forma nao é um closure








?>