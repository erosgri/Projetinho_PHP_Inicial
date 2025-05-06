<div class="titulo">Argumento Padrão</div>


<?php
function saudacao($nome = "Senhor(a)" , $sobrenome = "Cliente"){
    echo "Bem Vindo: $nome $sobrenome! <br>";
}

saudacao();
saudacao(null);
saudacao("eros", "grigolli");

echo "<hr>";

function pedido($comida , $bebida = "Água"){
//se nao pedir nada a bebida sera água
    echo "<br> Para comer: $comida<br>";
    echo "<br>Para comer: $bebida<br>";
}

pedido("pizza","refri");

?>