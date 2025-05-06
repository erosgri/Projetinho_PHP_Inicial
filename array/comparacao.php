<div class="titulo">Comparação Arrays</div>

<?php
//comparação entre arrays

    $arr1 = ['nome' => 'Eros' , 'idade' => '33 anos'];
    $arr2 = ['nome' => 'Aline' , 'idade' => '37 anos'];
    $arr3 = ['nome' => 'Eros' , 'idade' => '33 anos'];
    $arr4 = ['idade' => '33 anos' , 'nome' => 'Eros'];

    var_dump($arr1 == $arr2);
    echo '<br>';
    var_dump($arr1 == $arr3);
    echo '<br>';
    var_dump($arr1 == $arr4);
    echo '<br>';
    var_dump($arr1 === $arr4);

?>