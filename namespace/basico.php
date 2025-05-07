<?php namespace contexto; ?>


<div class="titulo">Exemplo Básico</div>

<?php

echo __NAMESPACE__ . '<br>';
const constante1 = 1234;
define('constante2', 12345);
define(__NAMESPACE__ . '\constante3', 666);
define('outro_contexto\constante4', 762);

echo constante1 . '<br>';
echo \constante2 . '<br>';
//acesso de forma absoluta
echo \contexto\constante3 . '<br>';
echo constant(__NAMESPACE__ . '\constante3') . '<br>';
echo \outro_contexto\constante4 . '<br>';

function soma($a , $b){
    return $a + $b;
}

echo \contexto\soma(1,2) . '<br>';

function strpos($str , $text){
    echo "Buscando texto '{$text}' em '{$str}'" . '<br>';
    return 1;

}

echo strpos('Texto generico' , 'busca');
echo \strpos('Texto generico' , 'busca');

