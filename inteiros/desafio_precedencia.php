<div class="titulo">Desafio de Precedência</div>

<?php

    echo '<p>1. Qual o Valor da operação Matemática abaixo?</p>';

    echo "<br>";

    

    try {

     echo 2 + 5 * 3 + (12 / 6 ) / (-8 + 2 ** 3 );

    } catch ( DivisionByZeroError $e ) {
        print("2 + 5 * 3 + (12 / 6 ) / (-8 + 2 ** 3 )  ");

        echo "<br>";               
        echo "Resultado = infinito";
    
    }
    

    echo'<p>2. Qual expressão abaixo imprime o valor 100? </p>';
    echo "<br>";
    
    print("A) (1 + 2) * 20 - 15  ");
    echo "<br>";
    
    echo "Resultado: = ",(1 + 2) * 20 - 15;
    echo "<br>";
    print("B) 4 * 5 ** 2;  ");
    echo "<br>";
    echo "Resultado: = ", 4 * 5 ** 2;
    echo "<br>";
    print("C) 2 ** 3 ** 4 / 1e25  ");
    echo "<br>";
    echo "Resultado: = ", 2 ** 3 ** 4 / 1e25;
    echo "<br>";
    print("D) 3 + (3 * 8) / 2 - 3  ");
    echo "<br>";
    echo "Resultado: = ", 3 + (3 * 8) / 2 - 3;

    //algumas funções

    echo "<br>";

    


?>

