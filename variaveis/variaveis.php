<div class="titulo">Variáveis Variáveis</div>

<?php
    $a ='valorA';
    $$a = 'valorAA';
    echo "$a";
    echo '<br>';
    echo "$$a"; //ele nao interpreta $$ só o $
    echo'<br>';
    echo "$a  {$$a}";
    echo '<br>';

    echo "$valorA"; 
    //isso buga a cabeça.....eu adicionei $ no valor da primeira atribuição $a que resultou na segunda atribuição

    $epa = 'opa';
    $opa = 'vish';
    $vish = 'fodeu tudo';
    echo '<br>';

    echo $epa . " {$$epa}" . " {$$$epa}";
    // nesse exemplo eu puxei a terceira variável pela primeira através do "$$$" em cadeia
?>
