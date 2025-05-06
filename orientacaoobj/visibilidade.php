<div class="titulo">Visibilidade/ Encapsulamento</div>

<?php
class A{
    public $publico = 'Publico';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA(){
        echo "Classe a) Publico = {$this->publico}<br>";
        echo "Classe a) Protegido = {$this->protegido}<br>";
        echo "Classe a) Privado = {$this->privado}<br>";
    }

    protected function protegido(){
        echo "Serei transmitido por herança?";
    }
    private function naoMostrar(){
        echo "nao imprimir";
    }

}

$a = new A();
$a->mostrarA();
//$b->naoMostrar();

class B extends A{
    public function mostrarB(){
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        echo "Class B) Privado = {$this->privado}<br>";

        parent::protegido(); //puxei da classe mãe "A"
    }
}

echo "<hr>";

$b = new B();
//quando eu puxo uma herança eu consigo acessar uma atribuição que está privada, mas nao consigo usar uma que está protegida
$b->mostrarB();


?>