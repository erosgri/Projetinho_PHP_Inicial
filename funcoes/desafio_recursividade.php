<div class="titulo">Desafio Recursividade</div>

<?php

$array = [1 , 2, [3, 4 , 5], 6, [7 , [8 , 9]], 10];



function imprimir($array, $nivel = '>'){
    foreach($array as $elemento){
        if(is_array($elemento)){
            imprimir($elemento, $nivel . $nivel[0]);
        }else{
            echo "$nivel $elemento<br>";
        }
    }
}

imprimir($array, '*');

?>