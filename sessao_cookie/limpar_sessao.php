<div class="titulo">Limpar Sessao</div>

<?php
session_start();
session_destroy();
header('Location: exercicioa.php?dir=sessao_cookie&file=sessao1');



?>