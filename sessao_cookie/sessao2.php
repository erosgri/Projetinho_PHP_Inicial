<div class="titulo">Sessão #2</div>

<?php
session_start();
print_r($_SESSION);

?>

<p>
    <b>Nome: </b><?php echo $_SESSION['nome'] ?>
</p>
<p>
    <b>E-mail: </b><?php echo $_SESSION['email']  ?>
</p>

<?php
$_SESSION['email'] = 'eros_hp9mm@hotmail.com';
?>

<p>
    <a href='exercicioa.php?dir=sessao_cookie&file=sessao1'>Voltar</a>
</p>
<p>
    <a href="exercicioa.php?dir=sessao_cookie&file=limpar_sessao">Limpar Sessão</a>
</p>