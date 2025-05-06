<div class="titulo">While / Do While</div>

<?php
    const VALOR_LIMITE = 5;
    $contador = 0;

    while($contador <= VALOR_LIMITE){
        echo "<br> while $contador <br>";
        $contador++;
    }
    echo "<hr>";
    
    $contador = 0;
    
    do {
        echo "<br> do-while $contador <br>";
        $contador++;
    } while($contador < VALOR_LIMITE);

    echo "<hr>";
    $contador = 10;

    for($contador = 0; $contador <= VALOR_LIMITE; $contador++){
        echo "<br> for $contador <br>";
    }

    //concluimos que podemos usar tanto for como while......for tem a vantagem de ser feito numa linha só

    ?>