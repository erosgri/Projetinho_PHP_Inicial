<div class="titulo">Usando Tipos</div>

<?php
function somar($a , $b){
    echo "<span> Somando: $a + $b = </span>";
    return $a + $b;
}

echo somar(2,4) , "<br>";
echo somar(2.5,'4mm') , "<br>";

function somar1(int $a , int $b){
    echo "<span> Somando: $a + $b = </span>";
    return $a + $b;

}

echo somar1(2,4) , "<br>";
echo somar1(2,'7') , "<br>";

function somar2($a , $b): int{
    echo "<span> Somando: $a + $b = </span>";
    return $a + $b;

}

echo somar2(2,4) , "<br>";
echo somar2(2.5,'4') , "<br>";

?>