<div class="titulo">Sessão #1</div>

<?php
session_start();

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'Eros';
    
}

if(!$_SESSION['email']) {
    $_SESSION['email'] = 'junior-gri@live.com';
}

print_r($_SESSION);


//<a href="http://localhost/sessao/sessao2.php">Alterar Sessão</a>
?>

<p>
    <a href="exercicioa.php?dir=sessao_cookie&file=sessao2">Alterar Sessão</a>
</p>

