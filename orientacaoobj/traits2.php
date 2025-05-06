<div class="titulo">Traits #02</div>

<?php

trait validacao {
    public $a = 'Valor a';
    public function validarString($str){
        //validar a string e verificar se ela é diferente se uma string vazia
        return isset($str) && $str !== '';
        
    }
}
trait validacaoMelhor{
    public function validarString($str){
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor{
        validacaoMelhor::validarString insteadOf validacao;
        validacao::validarString as validacaoSimples;
    }
}

$usuario = new Usuario();
var_dump($usuario->validarString('  '));
echo '<br>';
var_dump($usuario->validacaoSimples('   '));

?>