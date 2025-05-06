<div class="titulo">Operador Ternário</div>



<?php
    $idade = 65;
    $status;


    if($idade < 18){
        $status = 'Menor de idade';
        echo $status;

    }elseif($idade >= 18 && $idade <= 64){

            $status = 'Maior de idade';
            echo $status;


    }else{

            $status = 'Terceira idade';
            echo $status;
    }

        //operador ternário:
                echo '<br> Operador ternario: <br>';

                 $status = $idade >= 18 ? 'Maior de idade 1' : 'Menor de idade 1';
                        echo $status;
                        echo '<br>';
        //ternário de 3 variavés nao é muito funcional
                   $status = $idade >= 18 ? $idade >=64 ? 'Terceira idade 2' : 'Maior de idade 2' : 'Menor de idade 2';
                      echo $status;
                      echo '<br>';
            $statusmaior = $idade >= 65 ? 'Terceira Idade 3' : 'Maior de idade 3';

             $status = $idade >=18 ? $statusmaior : 'Menor de idade 3';
                     echo '<br>';
                     echo $status;






?>