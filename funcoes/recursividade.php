<div class="titulo">Recursividade</div>

<?php
function somatorio($numero){
    $soma = 0;
    for(;$numero >= 1; $numero--){
        $soma +=$numero;

    }
    return $soma;
};

echo somatorio(5) , '<br>';
echo '<hr>';

function somatorio1($numero){
    $soma = 0;
    for($i = 1; $i <= $numero; $i++){
        $soma +=$i;

    }
    return $soma;
};

echo somatorio1(6) , '<br>';

echo "<hr>";
echo "<h4>soma recursiva</h4>";

function somarecursiva($numero){
    //condição de parada
    if($numero === 1){
        return 1;
    }else{

        return $numero + somarecursiva($numero - 1);
    };
};

echo somarecursiva(10) , '<br>';

function somarecursivaeconomica($numero){
    return $numero === 1 ? 1 : $numero + somarecursivaeconomica($numero - 1);
};

echo somarecursivaeconomica(10) , '<br>';


?>