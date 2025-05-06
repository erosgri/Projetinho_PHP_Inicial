<div class="titulo">Tipo String</div>

<?php
    echo'Eu  Sou um String';
    echo"<br>"; 
    var_dump("Eu também");
    echo"<br>"; 

    //concatenação

    echo'Nós também' . " somos";
    echo "<br>", "posso" , ' separar', ' Por várias', " Vírgulas";
    echo "<br>";

    print 'print tambem é uma função string';
     
    echo "<br>";

    echo "<br>" .   strtoupper('maximizando');
    echo "<br>" .   strtolower('MINIMIZAR');
    echo '<br>'.    ucfirst('só a primeira letra e maiuscúla');
    echo '<br>'.    ucwords('todas as primeiras letras das palavras serao maiusculas');
    echo '<br>'.    strlen('contagem de caracteres espaço entre as palavras contam');
    echo '<br>'.    mb_strlen('eu tbm conto');
    echo '<br>'.    substr('só conta uma parte', 7, 6);
    echo '<br>'.    str_replace('isso' , 'aquilo', 'Trocar isso isso');

?>