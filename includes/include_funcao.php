<div class="titulo">Include Função</div>


<?php
echo 'Carregando: include_funcao<br>';

function carregarArquivo(){
    include('include_arquivo.php');

    echo $variavel . '<br>';
    echo soma(2,5) . '!<br>';
}

carregarArquivo();

echo 'Novamente no arquivo include_funcao <br>';
echo soma (1,8);

echo "Variavel = '{$variavel}'";

var_dump($variavel);

echo '<br>' . soma(5,5);


?>