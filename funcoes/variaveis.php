<div class="titulo">Argumentos Variáveis</div>


<?php

function soma($a, $b){
    return $a + $b;
}
echo soma(3,3) , "<br>";

function somacompleta(...$numeros){
    $soma = 0;
    foreach($numeros as $num){
        $soma += $num;
    }
    return $soma;
}
echo somacompleta(1,2,3,4,5) , "<br>";

$array = [10 , 20, 30];

echo somacompleta(...$array) , "<br>";

function membros($titular, ...$dependentes  ){
    echo "Titular: $titular" , '<br>';
    
    if($dependentes){
        foreach($dependentes as $dep){
            echo "Dependente: $dep<br>" ;
            
        } 
    }elseif (empty($dep)) {
        echo 'Sem dependentes';
    }
    
    
                
}




echo '<br>' , membros("Eros");




?>