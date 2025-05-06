<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = array('Laranja' , 'Uva' , 'Abacaxi', 'Limão');
//FRUTAS[0] = 'banana'; nao é possivel subistituir e nem adicionar novos elementos numa const array
//FRUTAS[0] = 'banana;

echo FRUTAS[1];

const CARROS = ["Ferrari" => "Porsche" , "Audi" => "Lamborghini"];

echo '<br>' . CARROS["Ferrari"];

//outro metodo de fazer um array

define('CIDADES' , array('Belo Horizonte' , 'São Paulo'));

echo '<br>' . CIDADES[1];

?>

