<div class="titulo">Include vs Require</div>

<?php
echo 'Usando include......<br>';
ini_set('display erro', 1);
include('arquivo_inexistente.php');
echo 'Usando include com arquivos inesistente...<br>';

echo '<hr>';

echo 'Usando require......<br>';
require('arquivo_inexistente.php');
echo 'Usando require com arquivos inesistente...<br>';





?>