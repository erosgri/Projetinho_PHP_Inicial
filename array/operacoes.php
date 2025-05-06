<div class="titulo">Operações</div>
<?php

$dados1 = [
    "nome" => "Eros<br>",
    "idade" => "33 anos<br>",

];

$dados2 = [
    "naturalidade" => "São Paulo - SP<br>",
    "sexo" => "Masculino<br>",
];

$soma = $dados1 + $dados2;

print_r($soma);
echo "<br>";
//tirar um item do array:

unset($soma['sexo']);
echo "<br>";
print_r($soma);