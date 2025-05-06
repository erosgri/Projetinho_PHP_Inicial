<div class="titulo">Variaveis</div>

<?php
        $numeroA = 13;
        echo $numeroA , '<br>';
        var_dump($numeroA);
        echo '<br>';

        $a = 3;
        $b = 16;
        $soma = $a + $b;
        echo $soma;
        echo '<br>';
        echo isset($soma);
        unset($soma);
        echo '<br>';
        var_dump($soma);
        echo '<br>';
        $variavel = "Agora sou uma String!";
        echo '<br>' . $variavel;

            //Nomes de Variaveis

        $var = 'valido';
        $var_1 = 'valido';
        $var_4_ = 'valido';
        echo '<br>';

        echo $var . $var_1 . $var_4_ , "<br>";

        // Variaveis invalidas
        //$6var
        //$var6%
        //$%var
        //$var-
        echo '<br>';
        
        var_dump($_SERVER["HTTP_HOST"]);

        


?>