<div class="titulo">Mapa Array</div>
<?php

        $dados = array(
            "idade" => 33,
            "cor" => "verde",
            "peso" => 66.3,
            
        );

    print_r($dados);

    echo '<br>' . $dados["idade"];
    echo '<br>' . $dados["peso"];
    echo '<br>' . $dados["cor"];

    $lista = array( //misturando arrays
        "a",
        "dois" => "k",
        8 => "m",
        3 => "p",


    );
    echo "<br>";
    print_r($lista);
    echo "<br>";
    $lista[] = "L"; //add mais um item no array
    echo "<br>";
    print_r($lista);
    echo "<br>";
    $lista[15] = "quinze"; //array em determinada posição
    echo "<br>";
    print_r($lista);


?>