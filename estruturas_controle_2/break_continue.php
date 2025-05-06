<div class="titulo">Break/Continue</div>

<?php
    $cont = 16;

    for(;;){//laço infinito
        echo "$cont <br>";
        $cont++;
        if($cont > 20){
            break;
        }
    }

    echo "<hr>";

    for(;;){
        $cont++;
            if($cont % 2 === 1) {// modulo para pegares somente valores pares
                continue;
            }
            if($cont >= 30){
                break;
            }
        
        echo "$cont <br>";
    
         }
    echo "<hr>";

         foreach(array(1,2,3,4,5,6) as $valor) {

            if($valor === 5) break;
            if($valor % 2 === 0) continue;
            echo "<br> $valor";


         }
    //se nao colocar o break o laço se torna infinito
    echo "<br> Fim";


?>