<div class="titulo">Laço For</div>

<?php
    for($cont = 1 ; $cont <= 5 ; $cont++){

        echo "$cont <br>";
    }

    echo "<br>";

    for(;$cont <= 12 ; $cont++){

        echo "$cont <br>";
    }
    for(;$cont <= 18 ; ){

        echo "$cont <br>";
        $cont++;
    }

    echo "<br>";
    $array = ['Domingo' , 'Segunda' , 'Terça' , 'Quarta', 'Quinta' , 'Sexta', 'Sabado'];

    for($i = 0; $i < count($array); $i++){
        echo "{$array[$i]} <br>";
    }

    print_r($array);

    echo "<br>";

    $matrix = [
        ['a', 'e', 'i', 'o', 'u'],
        ['b', 'c', 'd']

    ];

    echo "<br>";
    for($i = 0; $i < count($matrix); $i++){
        for($j = 0; $j < count($matrix[$i]); $j++){

            echo "{$matrix[$i][$j]} ";
        }
        echo '<br>';
    }



?>