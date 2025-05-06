<div class="titulo">Integração Css</div>

<h1 center azul>
<?php
echo 'olá';
echo '<small>';
echo ' Eros';
echo '</small.>';
?>
</h1>



<?= "<div> outra forma</div>" ?>

<br>
<div center><button dobro><?="Legal"?></button></div>

<style>
        button{

            padding: 10px 20px;
            background-color: blue;
            color: white;
            font-weight: bold;
            border-radius: 20px;
        }
        [center]{
             display: flex;
            justify-content: center;
    }
        <?= "[azul]"  ?>{
            color: blue;

    }
         [dobro]{
            font-size: 2rem;
    }

</style>
