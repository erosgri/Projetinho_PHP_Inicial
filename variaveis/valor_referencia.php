<div class="titulo">Valor por referencia</div>

<?php
    $variavel = 'valor inicial';

    echo '$variavel imprime: ' . " $variavel";

    echo'<br>';
        //atribuição por valor
    $variavelvalor = $variavel;
    echo '$variavelvalor com o mesma atribuição de $variavel imprime a mesma atribuição: =' . $variavelvalor;
    echo'<br>';
    $variavelvalor = 'novo valor';
    echo'<br>';
    echo $variavel;
    echo"<br> $variavelvalor" . ' Aqui nos atribuimos novo valor para $variavelvalor';

        //atribuição por referencia
    $atribuicaoreferencia = &$variavel;
    $atribuicaoreferencia = 'Recebe a mesma referência';
    echo '<br>' . $atribuicaoreferencia;
    echo '<br>' . $variavel;



    


?>