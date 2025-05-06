<div class="titulo">Operadores Relacionais</div>

<?php

    //var_dump(1 == 1);
    //var_dump(1 > 1);
    //var_dump(1 < 1);
    //var_dump(1 >= 1);
    //var_dump(1 != 1);


    echo"<p>Usando os Relacionais no IF/Else</p>";
    

    $idade = 69;

    if($idade < 18){

        echo "Menor de idade";

    }else if($idade < 65 ){
        echo "Adulto";

    }else{
        echo "Idoso";
    }

    echo "<p>Spaceship</p>";
    var_dump(50 <=> 5); //comparação e ordenação
    var_dump(50 <=> 50); //comparação e ordenação
    var_dump(50 <=> 500); //comparação e ordenação

?>

<style>
    p{
        text-decoration: underline black;

    }
    

</style>

