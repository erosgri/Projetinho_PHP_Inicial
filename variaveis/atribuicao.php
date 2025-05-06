<div class="titulo">Atribuições</div>

<?php

    $title = 'Atribuições';
    echo $title;
    $numero = 10;
    echo '<br>' . $numero;
    $numero = $numero - 1;
    echo '<br>' . $numero;
    $numero = 10 - 2;
    echo '<br>' . $numero;

    $numero--; //atribuiu -1 no numero
    echo '<br>' . $numero;

    $numero++; // atribuiu +1 no numero
    echo '<br>' . $numero;

    $numero -= 5; // atribuiu - 5 no numero
    echo '<br>' . $numero;

    $numero *= 5; // atribuiu uma multiplicação de 5 no numero
    echo '<br>' . $numero;

    $numero **= 2;  // atribuição de elevado a 5
    echo '<br>' . $numero;

    $numero %= 4; //atribuição de modulo
    echo '<br>' . $numero;

    echo '<br>';

    $texto = "'esse é um texto'";
    echo $texto;
    echo '<br>';
    echo $texto . ' qualquer'; 
    $texto .= 'Uma variavel'; //concatenação
    echo '<br>';
    echo $texto;


?>