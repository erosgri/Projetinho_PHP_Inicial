<div class="titulo">Sorteio</div>

<?php
    //escolher o nome aleatoriamente

    $nomes = ["Eros" , "Renato", "Joao", "Renan", "Claudio", "Thiago"];

    print_r($nomes);
    echo "<br>";

    $sorte = array_rand($nomes);
    echo "<br><h1><center> $nomes[$sorte]</h1>";
    
    

?>
