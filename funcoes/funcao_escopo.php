<div class="titulo">Função e Escopo</div>

<?php
    function imprimirmensagens(){
        echo "Olá!  ";
        echo "Até a próxima<br>";
    }

imprimirmensagens();
imprimirmensagens();
imprimirmensagens();

$variavel = 1;
function trocadevariavel(){
    $variavel = 2;
    echo "Durante a função: $variavel";
}
echo "antes da troca: $variavel";
echo "<br>";
trocadevariavel();
echo "<br>Depois da troca: $variavel";

//trocar o valor

function trocaverdadeira(){
    global $variavel; //global para trocar a variavel
    $variavel = 3;
    echo "<br> Troca verdadeira: $variavel";
}

trocaverdadeira();

echo "<br> Novo valor da variavel: $variavel <br>";

var_dump(trocaverdadeira());

?>