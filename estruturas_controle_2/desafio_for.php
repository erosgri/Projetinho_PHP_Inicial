<div class="titulo">Desafio For</div>

<?php

//imprimir a sequencia => # , ## , ###, ####, #####:

$array = ['#' , '##' , '###' , '####', '#####'];

    for($i = 0; $i < count($array); $i++){
        echo "{$array[$i]} <br>";
    }

echo "<hr>";

$ast = '';

    for($cont = 1 ; $cont <= 5; $cont++){
        $ast .= '#'; //concatenação acrescentando
        echo "<br> $ast";
    }
echo "<hr>";

for(
    $imp = '#';
    $imp !== "######";
    $imp .= '#'){
    
    echo "<br> $imp";

    }
?>