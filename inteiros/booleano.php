<div class="titulo">Booleano</div>

<?php
        echo true;
        echo'<br>';
        echo false;

        echo '<br>' , var_dump(true);
        echo '<br>' , var_dump(false);
        echo '<br>' , var_dump("false");
        echo '<br>' , is_bool(false);
        echo '<br>' , is_bool("true");

        // regras do booleano

        echo'<p>Regras Para o Booleano</p>';
        echo '<br>' . var_dump((bool) 0); // dos numeros inteiros zero é o unico convertido pra falso
        echo '<br>' . var_dump((bool) 20);
        echo '<br>' . var_dump((bool) -7);

        

?>