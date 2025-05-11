<div class="titulo">Inserir Registro</div>

<?php
require_once "conexao.php";

$sql = "INSERT INTO cadastro (
            nome, email, nascimento, site, filhos, salario
        ) VALUES (
            'fatima',
            'fatima-silva@uol.com',
            '1972-09-25',
            'instagram/fsilva',
            4,
            3980.85
        )";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "Sucesso";
}else{
    echo 'Erro ' . $conexao->error;
}

$conexao->close();


?>