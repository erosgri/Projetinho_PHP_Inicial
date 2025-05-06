<div class="titulo">Desafio Impressao</div>
<!-- imprima os valores pares do ARRAY -->
<?php
    $array = [
        "AAA",
        "BBB",
        "CCC",
        "DDD",
        "EEE",
        "FFF",
    ];


    for($i=0 ; $i < count($array); $i++){
        if($i %2 !== 0) continue;
        echo "{$array[$i]}<br>";
    }


    foreach($array as $chave => $valor){
        if($chave %2 !== 0) continue;
        echo "<br>$valor<br>";
    }
?>