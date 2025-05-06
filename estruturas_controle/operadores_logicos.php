<div class="titulo">Operadores Logicos</div>

<?php
    echo "<p>Negação lógica</p>";
    var_dump(true);
    echo'<br>';
    var_dump(!true);//! not
    echo"<br>";
    
    echo "<p>Tabela Verdade 'AND' (E)</p>"; //eu SÓ vou pro shopping SE tiver sol e SE eu tiver dinheiro

    var_dump(true && true);
    var_dump(true && false);
    var_dump(false && true);
    var_dump(false and false);

    echo "<p>Tabela Verdade 'OR' (ou)</p>"; //EU vou pro shopping se eu tiver sol OU se eu tiver dinheiro

    var_dump(true || true);
    var_dump(true || false);
    var_dump(false || true);
    var_dump(false or false);

    echo "<p>Tabela Verdade 'XOR' (ou exclusivo)</p>"; //ou eu compro um civc ou um corolla

    var_dump(true xor true);
    var_dump(true xor false);
    var_dump(false xor true);
    var_dump(false xor false);

    echo "<p class='divisao'>Exemplo</p>";

    $idade = 60;
    $sexo ='F';
    $pagouprevicendia = true;
    $criteriohomen = ($idade >= 65 && $sexo === 'M');
    $criteriomulher = ($idade >= 60 && $sexo === 'F');
    $atingiu_criterio = $criteriohomen || $criteriomulher;
    $aposentadoria = $pagouprevicendia && $atingiu_criterio;

    if($aposentadoria){
        echo 'pode se aposentar';
    }else{
        echo 'Reveja as regras de aposentadoria';
    }
    


?>

<style>
    p{
        text-decoration: underline black;
        font-weight: bold;

    }
    

</style>