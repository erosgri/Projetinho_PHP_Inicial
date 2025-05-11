<div class="titulo">Ler Arquivos</div>

<?php
$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 10);
echo '<br>';
echo fread($arquivo, 10);
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt');
echo $tamanho, '<br>';
echo fread($arquivo, $tamanho);
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo), '<br>';//ler linha a linha
echo fgets($arquivo), '<br>';//ler linha a linha
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)){
    echo fgets($arquivo), '<br>';
}
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r+');
echo fgets($arquivo), '<br>';//ler linha a linha
echo fgets($arquivo), '<br>';//ler linha a linha
fwrite($arquivo, "\nAdicionando terceira linha\n");


?>