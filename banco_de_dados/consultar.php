<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="titulo">Consultar DB</div>

<?php
require_once('conexao.php');

$sql = "SELECT * FROM cadastro";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

$registro = [];

if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        $registro[] = $row; 
    }
}elseif($conexao->erro){
    echo "Erro: " . $conexao->error;
}

//print_r($registro);

$conexao->close();
?>

<table class="table">
    <thead>
        <th>Códido</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Nascimento</th>
        <th>Site</th>
        <th>Filhos</th>
        <th>Salário(R$)</th>
    </thead>
    <tbody>
        <?php foreach($registro as $registro): ?>
            <tr>
                <td> <?= $registro['id'] ?></td>
                <td> <?= $registro['nome'] ?></td>
                <td> <?= $registro['email'] ?></td>
                <td> <?= $registro['nascimento'] ?></td>
                <td> <?= $registro['site'] ?></td>
                <td> <?= $registro['filhos'] ?></td>
                <td> <?= $registro['salario'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table > * {
        font-size
    }
</style>

