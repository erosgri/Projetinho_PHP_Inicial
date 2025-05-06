<?php

echo 'Carregando: include_arquivo<br>';


$variavel = 'Estou definido';


if(!function_exists('soma')){
    function soma($a, $b){
        return $a + $b;
    }

}

?>