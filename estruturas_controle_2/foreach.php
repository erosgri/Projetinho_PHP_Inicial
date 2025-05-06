<div class="titulo">Foreach</div>

<?php

$meses= array(
    1 => "Janeiro<br>",
    2 => "Fevereiro<br>",
    3 => "Março<br>",
    4 => "Abril<br>",
    5 => "Maio<br>",
    6 => "Junho<br>",
    7 => "Julho<br>",
    8 => "Agosto<br>",
    9 => "Setembro<br>",
    10 => "Outubro<br>",
    11 => "Novembro<br>",
    12 => "Dezembro<br>",

);

foreach($meses as $valor){
    echo "<br> $valor";
}
echo "<hr>";

foreach($meses as $indice => $valor){
    echo "<br> $indice => $valor";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']

];

echo "<hr>";
foreach($matrix as $linha){

    foreach($linha as $coluna){
        echo "$coluna";
    }
    echo "<br>";
}
echo "<hr>";

$num = [1 , 2 , 3 , 4 , 5];

foreach($num as &$dobrar){
    $dobrar *= 2;
    echo "<br> $dobrar";
}



?>