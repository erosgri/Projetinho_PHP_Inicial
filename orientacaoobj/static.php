<div class="titulo">Membros Estáticos</div>

<?php
class A {
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe (estática)';

    public function mostrarA() {
        echo "Não estático = {$this->naoStatic}<br>";
        // echo "Estática = {$this->static}<br>"; nao funciona pra puxar um mebro static
        echo "Estática = " . self::$static . "<br>";
    }
    
    public static function mostrarStaticA(){
        //DENTRO DE UMA FUNÇÃO ESTATICA EU SÓ CONSIGO ACESSAR MEMBROS ESTÁTICOS
        echo "Estática  da função publica  = " . self::$static . "<br>";
    }

}

//$objetoA = new A();
//$objetoA->mostrarA();
//$objetoA->mostrarStaticA(); nao é a forma ideal
A::mostrarStaticA(); //acessar diretamente pela classe
echo A::$static, '<br>'; //acessar diretamente pela classe
A::$static = 'Alterar membro de classe';
echo A::$static, '<br>'; //acessar diretamente pela classe

?>