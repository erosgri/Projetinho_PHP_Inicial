<div class="titulo">Retornando Função</div>

<?php
function soma($a){
    return function($b) use($a){//use para chamar o algoritimo
        return $a + $b;
    };
};

echo soma(5)(5);
$dois = soma(2);
echo '<br>' , $dois(10);

?>