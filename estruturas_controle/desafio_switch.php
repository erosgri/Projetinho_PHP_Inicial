<div class="titulo">Desafio Switch</div>
<h4>Selecione a operação abaixo:</h4>
<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km para Milha</option>
        <option value="milha-km">Milha para KM</option>
        <option value="metro-km">Metro para KM</option>
        <option value="km-metro">Km para metro</option>
        <option value="ºF-ºC">ºF para ºC</option>
        <option value="ºC-ºF">ºC para ºF</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > *{
        font-size: 1.5rem;
    }
</style>
<?php
    const FATOR_KM_MILHA = 0.621371;
    const FATOR_METRO_KM = 1000;
    const FATOR_F_C = 1.8;
    

    $param = $_POST['param'] ?? 0;
    $conversao = $_POST['conversao'] ?? 0; //?? null coalesce mesmo que o isset setar valores que nao vieram para evitar erro
    


    switch($conversao){

        case 'km-milha':
            $calculo = $param * FATOR_KM_MILHA;
            echo "<br> O resultado de KM {$param}km para Milhas é: {$calculo}milhas " ;
            break;

        case 'milha-km':
            $calculo = $param / FATOR_KM_MILHA;
            echo "<br> O resultado de Milhas {$param}milhas para Km é: {$calculo}km " ;
            break;
        
        case 'metro-km':
            $calculo = $param / FATOR_METRO_KM;
            echo "<br> O resultado de Metros {$param}m para Km é: {$calculo}km " ;
            break;     

        case 'ºF-ºC':
            $calculo = ($param - 32)* FATOR_F_C;
            echo "<br> O resultado de ºF {$param} para ºC é: {$calculo} " ;
            break;
       
        case 'ºC-ºF':
            $calculo = ($param * 9/5) + 32 ;
            echo "<br> O resultado de ºC {$param} para ºF é: {$calculo} " ;
            break;
        
        default: 
           

        

    }
        
?>