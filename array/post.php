<div class="titulo">$_POST </div>  

<form action="#" method="post">
    <input type="text" name="nome" >
    <input type="text" name="sobrenome" >
    <select name="Sexo">
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
    </select>
    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

   print_r($_POST);
   echo '<br>';
   print_r($_GET);
   echo '<br>';
   echo count($_POST);

?>