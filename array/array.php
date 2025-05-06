<div class="titulo">Array</div>


<?php
$lista = array(1, 2, 3.4, "texto"); //indice 0 , indice 1, indice 2.....
echo $lista; // nao imprime
var_dump($lista);
echo "<br>";
print_r($lista);
echo "<br>";
echo $lista[3];
echo "<br>";

$texto = "demonstração de uma array";
echo "<br>";
echo $texto[0];
echo $texto[1];
echo $texto[2];
echo '<br>' . substr($texto, 0, 13); // forma de plotar os caracteres do array
?>
