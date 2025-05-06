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
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/exercicioa.css">
    

    
    <title>Exercicio A PHP</title>



</head>

<body class="exercicioa">

    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Vizualização dos Exercícios</h2>
    </header>

    <nav>
        <class class="navegacao">
            
            <a href="<?= "{$_GET['dir']}/{$_GET['file']}" ?>" class=verde>Sem Formatação</a> 
            <a href="index.php"class="vermelho">voltar</a>
        </class>
    </nav>
    
    
    
    <main class="principal">   
        <div class="conteudo">
            <?php
                //include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
                //include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.html");   
                
                $dir = basename($_GET['dir']);
                $file = basename($_GET['file']);
                
                $pathPhp = __DIR__ . "/$dir/$file.php";
                $pathHtml = __DIR__ . "/$dir/$file.html";
                $pathJs = __DIR__ . "/$dir/$file.js";
            
                if (file_exists($pathPhp)) {
                    include($pathPhp);
                }
            
                if (file_exists($pathHtml)) {
                    include($pathHtml);
                }
            
                if (file_exists($pathJs)) {
                    include($pathJs);
                }

            ?>          
            
        </div>
    </main>

    <footer class="rodape"> 
            
        <h1>eros grigolli</h1>

    </footer>
    
</body>
</html>
