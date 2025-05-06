<div class="titulo">Desafio PI</div>

<?php
    echo pi();

    $pi = 3.14;
    $valorerrado = 2.8;

    if($pi === $valorerrado){
        echo "<br>Igual";

    }elseif($pi - pi() <= 0.0015){
        echo "<br>iguais";
    }
    
    if($pi - $valorerrado <= 0.0015){

        echo '<br> igual';

    }else{
        echo"<br>diferente";
    }

?>
