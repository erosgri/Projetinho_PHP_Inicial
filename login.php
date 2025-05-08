<?php
session_start();

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

if (!empty($email)) {
    $usuarios = [
        [
            "nome" => "Eros",
            "email" => "junior-gri@live.com",
            "senha" => "666",
        ],
        [
            "nome" => "Aline",
            "email" => "aline-gri@live.com",
            "senha" => "762",
        ]
    ];

    foreach ($usuarios as $usuario) {
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if ($emailValido && $senhaValida) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            $exp = time() + 60 * 60 * 24 * 30;
            setcookie('usuario', $usuario['nome'], $exp);
            header('Location: index.php');
        }
    }

    if (!isset($_SESSION['usuario'])) {

        $_SESSION['erros'] = ['Usuário/Senha inválido!'];
    }
}
       

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/login.css">
    
     
    <title>Curso PHP</title>

</head>
<body class="Login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja Bem vindo</h2>
    </header>


    <main class="principal">
        <div class="conteudo">

            <h3>Fazer Login</h3>
            <?php if(isset($_SESSION['erros'])): ?>
                     <div>
                        <?php foreach($_SESSION['erros'] as $erro): ?>
                            <p><?php echo $erro ?></p>
                        <?php endforeach ?>
                    </div>
            <?php endif ?>
            <form action="#" method="post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Login</button>
            </form>
            
        </div>
    </main>
    
    <footer class="rodape">
        
        <h1>Este curso foi patrocinado por Carlos Eduardo Espíndola <h1>
        <h2><img src="assets/img/cadu.jpeg" alt="20px" width="41px"></h2>


    </footer>
    
</body>
</html>


