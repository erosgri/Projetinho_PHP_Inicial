<div class="titulo">Desafio Tabela 2</div>

<form action="#" method="post">
    <div>
        <label for="linhas">Linhas</label>
        <input type="number" value=<?= $_POST['linhas'] ?? 10 ?> name="linhas" id="linhas">
    </div>
    <div>
        <label for="colunas">Colunas</label>
        <input type="number" value=<?= $_POST['colunas'] ?? 10 ?> name="colunas" id="colunas">
    </div>
    <button>Gerar Tabela</button>
</form>

<table>

    <?php
    $linhas = $_POST['linhas'] ?? 10 ;
    $colunas = $_POST['colunas'] ?? 10 ;
    if(!$linhas){ $linhas = 10;}
    if(!$colunas) {$colunas = 10;}

    $num = 1;
    for($i = 0; $i < $linhas ; $i++){
        echo "<tr>";
        for($j = 0; $j < $colunas ; $j++){
            echo "<td>$num</td>";
            $num++;
            
        }
        echo "</tr>";
    }
    ?>

</table>

<style>
    form * {
        font-size: 1.8rem;
    }

    form > div {
        margin-bottom: 15px;
    }

    table{
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 3px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
    tbody {
        border: 3px solid #444;
    }
</style>