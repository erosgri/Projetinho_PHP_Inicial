<div class="titulo">Switch</div>

<?php
    $categoria = 'SUV';
    $preco = 0.0;
    $carro = '';

    if($categoria === 'Luxo'){

            $carro = 'Mercedes';
            $preco = 400000;
    
    }elseif($categoria === 'SUV'){

            $carro = 'BMW';
            $preco = 200000;


    }elseif($categoria === 'sedan'){

            $carro = 'civic';
            $preco = 70000;
    }else{

            $carro = 'mobi';
            $preco = 33000;
    }

    $precoformatado = number_format($preco , 2 , ',', '.');
    echo "<p>Carro: $carro<br>Preço: R$ $precoformatado </p>";

    $categoria = 'sedan';
    switch($categoria){
            case 'Luxo':
                $carro = 'Mercedes';
                $preco = 400000;
                break;
            
            case 'SUV':
                $carro = 'BMW';
                $preco = 200000;
                break;
            case 'sedan':
                $carro = 'Civic';
                $preco = 70000;
                break;
            default:
                $carro = 'Mobi';
                $preco = 33000;
     }

     $precoformatado = number_format($preco , 2 , ',', '.');
        echo "<p>Carro: $carro<br>Preço: R$ $precoformatado </p>";

?>
