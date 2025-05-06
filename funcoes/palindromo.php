<div class="titulo">Palindromo</div>

<?php

function palindromo($palavra){
    $ultimo = strlen($palavra) -1;
    for ($i= 0; $i <= $ultimo; $i++){
        if($palavra[$i] !== $palavra[$ultimo - $i]){
            return "Não";
        }

    }

    return "Sim";
}

echo palindromo('arara');

echo "<hr>";

function palindromoSimples($palavra){
    return $palavra === strrev($palavra) ? 'Sim' : 'Não';
}

echo palindromoSimples('arara'), "<br>";
echo palindromoSimples('Lucas');



?>