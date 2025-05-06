<div class="titulo">Interpolação</div>


<?php

    $numero = 10;
            // aspas simples e aspas duplas
    echo '<br>' . $numero;
    echo '<br>  $numero';
    echo "<br>  $numero";
    echo '<br>';

    $texto = "A sua nota é: $numero"; 
    echo '<br>';
    echo $texto;
    echo '<br>';
    $objeto = 'caneta';

    echo "eu tenho 5 $objeto";
    echo'<br>';
    echo "eu tenho 5 {$objeto}s tri legais"; //uso de colchetes para adicionar elementos a classe adicionada
    echo "<br> eu tenho 5 { $objeto}s tri legais mas duas {$objeto }s não funcionaram"; 
    //nao coloque espaço antes da chave mas nao tem problema colocar depois

    //aspas simples nao interpolam o codigo....ele interpretará o texto ao contrario das aspas duplas
    





?>
