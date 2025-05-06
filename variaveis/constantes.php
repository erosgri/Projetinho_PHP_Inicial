<div class="titulo">Constantes</div>

<?php
    define('TAXA_DE_JUROS' , 5.9);
    echo TAXA_DE_JUROS;

    const NOVA_TAXA = 2.9;

    echo '<br>' . NOVA_TAXA;

    // const NOVISSIMA_TAXA = $valorvariavel; isso gera um erro

    $valorvariavel = 1.7;
    define('TAXA_JUROS_2' , $valorvariavel);
    echo '<br>' . TAXA_JUROS_2;
    const NOVISSIMA_TAXA = 1.6 * 2.5;
    echo '<br>' . NOVISSIMA_TAXA;




?>