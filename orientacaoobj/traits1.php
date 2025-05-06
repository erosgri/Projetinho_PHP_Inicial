<div class="titulo">Traits #01</div>

<?php

//trait se usa para herdar mulplas classes
trait validacao {
    public $a = 'Valor a';
    public function validarString($str){
        //validar a string e verificar se ela é diferente se uma string vazia
        return isset($str) && $str !== '';
        
    }
}

trait validacao2 {
    public $b = 'Valor b';
    private $c = 'Valor C (privado)';
    
    public function validarString2($str){
        //se a string estiver setada e trim(espaço branco) validação melhor
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacao2;
    public function imprimirVC(){
        echo '<br>' , $this->c;
    }
}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validarString2(' '));
echo '<br>';
echo $usuario->a, '<br>' , $usuario->b , '<br>', $usuario->imprimirVC();


?>