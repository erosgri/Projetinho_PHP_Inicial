<div class="titulo">Desafio data</div>

<?php
class Data {
    public $dia = '01';
    public $mes = "janeiro";
    public $ano = '1970';

    public function data1() {
        return "{$this->dia}/ {$this->mes}/ {$this->ano} <br>";
}}

$d = new Data();
echo $d->data1();
$aniversario = new Data();
$aniversario -> dia = "22";
$aniversario -> mes = "Novembro";
$aniversario -> ano = 1992;
echo $aniversario->data1()



?>