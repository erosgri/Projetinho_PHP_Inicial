<div class="titulo">Map e Filter</div>

<?php

$notas = [5.8 , 9.1, 4.6, 7.3];
$notasfinais = [];
foreach($notas as $nota){
    $notasfinais[] = round($nota);
};

print_r($notasfinais);

$notasfinais1 = array_map('round' , $notas);
echo '<br>';

print_r($notasfinais1);

$aprovados =[];

foreach($notas as $nota){
    if($nota >= 7){
        $aprovados [] = ($nota);

    }
}

echo '<br>';

print_r($aprovados);

echo "<hr>";

function aprovados($nota){
    return $nota >=7;
};

echo'<br>';
$aprovados2 = array_filter($notas, 'aprovados');

print_r($aprovados2);

function addponto($nota){
    $notafinal = round($nota) + 1;
    return $notafinal > 10 ? 10 : $notafinal;
};

echo'<br>';
$notasfinais2 = array_map('addponto', $notas);
print_r($notasfinais2);


?>  