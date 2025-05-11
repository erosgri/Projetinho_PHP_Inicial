<?php
session_start();

if($_COOKIE['usuario']) {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario']){
    header('Location: login.php ');
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
    <link rel="stylesheet" href="assets/css/exercicioa.css">
     
    <title>Curso PHP</title>

</head>
<body>

    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>

    <!-- <nav>

        <class class="navegacao">
            <span class="usuario">Usuário: <?= $_SESSION['usuario']?></span>
            <a href="logout.php">Sair</a>
            
           
        </class>
    </nav> -->

    <nav class="navegacao">
        <span class="usuario">Usuário: <?= $_SESSION['usuario']?></span>
        <a href="logout.php">Sair</a>
    </nav>

    <main class="principal">
        <div class="conteudo">
            <?php require('menu.php'); ?>
        </div>
    </main>

    
    <!-- <footer class="rodape">
        
        <h1>Este curso foi patrocinado por Carlos Eduardo Espíndola <h1>
        <h2><img src="assets/img/cadu.jpeg" alt="20px" width="41px"></h2>


    </footer> -->

    <footer class="rodape">
            <p>Este curso foi patrocinado por Carlos Eduardo Espíndola  
            <img src="assets/img/cadu.jpeg" alt="Foto do patrocinador" width="41px"></p>
    </footer>
</body>



</html>

