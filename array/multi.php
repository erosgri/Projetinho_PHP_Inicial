<div class="titulo">Multidimensionais</div>
<?php
$dados = [



0 =>[
    "nome" => "Eros<br>",
    "idade" => "33 anos<br>",
    "nacionalidade" => "São Paulo - SP<br>",

], [

    "nome" => "Carlos<br>",
    "idade" => "43 anos<br>",
    "nacionalidade" => "Florianópolis - SC<br>",
],
[

    "nome" => "Bruna<br>",
    "idade" => "36 anos<br>",
    "nacionalidade" => "Mairiporã - SP<br>",
],
[

    "nome" => "Maria<br>",
    "idade" => "83 anos<br>",
    "nacionalidade" => "Barretos - SP<br>",
]

];

//print_r($dados);
//echo '<br>' . $dados[0] ['nacionalidade'];
//echo '<br>' . $dados[2] ['idade'];
//echo '<br>';
//print_r($dados[1]);
//adicionar novos termos:

$dados[] = [
    "nome" => "Renata<br>",
    "idade" => "61 anos<br>",
    "nacionalidade" => "Patos de Minas - MG<br>",


];


$dados[0]['Escolaridade'] = "superior<br>";

print_r($dados);




?>
