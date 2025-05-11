<div class="titulo">Tabela Banco de Dados</div>

<?php
require_once "conexao.php";

//DDL - Data definition lang
$sql = "CREATE TABLE IF NOT EXISTS cadastro(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    nascimento DATE,
    site VARCHAR(300),
    filhos INT,
    salario FLOAT

) ";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "Sucesso";
}else{
    echo 'Erro ' . $conexao->error;
}

$conexao->close();


?>