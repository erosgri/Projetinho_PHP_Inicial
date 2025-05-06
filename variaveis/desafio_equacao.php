<div class="titulo">Desafio de Equação</div>

<?php

$var1 = 1;
$var2 = 2;
$var3 = 3;
$var5 = 5;
$var6 = 6;
$var7 = 7;
$var10 = 10;

$equacao = ((($var3 + $var2) * $var6) ** $var2) / ($var3 * $var2) ;
$equacao2 = ((($var1 - $var5) * ($var2 - $var7)) / $var2) ** 2 ;
 
echo "Equação 1 = " . "((($var3 + $var2) * $var6) ** $var2) / ($var3 * $var2)" . "<br>" . "Resultado = " . $equacao;
echo'<br>';
echo "Equação 2 = " . "((($var1 - $var5) * ($var2 - $var7)) / $var2) ** 2" . "<br>" . "Resultado = " . $equacao2;
echo'<br>';
echo "Fazendo" . " ($equacao - $equacao2) ** 3 / $var10 ** 3";
echo'<br>';
echo "Resultado final = " . (($equacao - $equacao2) ** 3) / ($var10 ** 3);







?>


