<?php Namespace App; ?>

<div class="titulo">Sub-Namespace</div>

<?php

echo __NAMESPACE__ . '<br>';

const constante = 123;


namespace App\Principal;

echo __NAMESPACE__ . '<br>';
const constante = 666;

namespace App\Principal\Especifico;
echo __NAMESPACE__ . '<br>';
const constante = 6661;

echo constante . '<br>';
echo constant('\\' . __NAMESPACE__ . '\constante'). '<br>';
echo \App\constante . '<br>';
echo \App\Principal\constante . '<br>';
echo \App\Principal\Especifico\constante . '<br>';

?>
