
<?php
function novaConexao($banco = 'curso_php') {
    $servidor = '127.0.0.1';
    $usuario = 'root';
    $senha = 'carabina22';
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);
    
    if($conexao->connect_error){
        return null;
    }
    return $conexao;
}




?>