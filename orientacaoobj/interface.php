<div class="titulo">Interface do Objeto</div>

<?php


interface Animal {
    function respirar();

}

interface Canino {
    function latir(): string;
}

interface Felino {
    function miar();
}

class Gato implements Animal, Felino {
    function respirar(){
        return 'Preciso de ar';
    }
    function miar(){
        return 'MIAUUUUU!';
    }
    function mamar(){
        return "beber leite cat";
    }
    function correr(){
        return "vrumm cat";
    }
}

class Cachorro implements Animal, Canino {
    //quando herdamos funcionalidades
    function respirar(){
        return 'Preciso de ar';
    }
    function latir(): string {
        return 'au au!!';
    }
    function mamar(){
        return "beber leite";
    }
    function correr(){
        return "vrumm";
    }
}

$animal1 = new Cachorro();
echo $animal1->respirar(), '<br>';
echo $animal1->latir(), '<br>';
echo $animal1->mamar(), '<br>';
echo $animal1->correr(), '<br>';
echo '<br>';

var_dump($animal1);
echo '<br>';
var_dump($animal1 instanceof Animal);
echo '<br>';
var_dump($animal1 instanceof Cachorro);
echo '<br>';
var_dump($animal1 instanceof Canino);
echo '<br>';
var_dump($animal1 instanceof Felino);
echo '<br>';

echo '<hr>';

$animal2 = new Gato();
echo $animal2->respirar(), '<br>';
echo $animal2->miar(), '<br>';
echo $animal2->mamar(), '<br>';
echo $animal2->correr(), '<br>';



?>