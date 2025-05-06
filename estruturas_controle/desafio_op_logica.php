<div class="titulo">Desafio de operadores lógicos</div>

<!-- Dois trabalhos um na terça e um na quinta se os dois derem certos vamos 
    pro shopping comprar uma tv de 50" e tomar sorvete, se apenas um dos atrabalhos
    der certo vamos ao shopping comprar uma tv de 32" e tomar sorvete, e se nenhum dos 
    dois trabalhos derem certos ficaremos em casa -->

    <form action="#" method="post">
        <div>
            <label for="t1">Trabalho de terça-feira</label>
            <select name="t1" id="t1">
                <option value="1">Executado</option>
                <option value="0">Não executado</option>
            </select>
        </div>
        <div>
            <label for="t2">Trabalho de Quinta feira</label>
            <select name="t2" id="t2">
                <option value="1">Executado</option>
                <option value="0">Não executado</option>
            </select>
        </div>
            <button>Executar</button>
    </form>

    <style>
        button, select {
            font-size: 1.3rem;
        }

    </style>

    <?php 


    if(isset($_POST['t1']) && isset($_POST['t2'])){
    
            $trabalho1 = $_POST['t1'];
            $trabalho2 = $_POST['t2'];
            $sorvete = $_POST['t1'] || $_POST['t2'];
           
           if($trabalho1 && $trabalho2){
                echo "ir no shopping comprar a TV 50 ";

           }elseif($trabalho1 || $trabalho2){

                echo "ir no shopping comprar a TV 32";

           }else{

                echo "ficar em casa ";

           }      
           if($sorvete){
                echo "<br>Vamos tomar sorvete";

           }else{

                echo "<br> Não Vamos tomar sorvete ";

           }      

        }
            


    
    ?>


