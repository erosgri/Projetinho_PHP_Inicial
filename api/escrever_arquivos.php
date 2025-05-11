<div class="titulo">Escrever Arquivos</div>

<?php

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Valor inicial\n");
$str = "Segunda linha att\n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo conteúdo");
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, "Adicionando novos valores\n" );
fwrite($arquivo, "add em segundo momento\n" );
fclose($arquivo);



?>