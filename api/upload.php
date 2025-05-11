<div class="titulo">Upload de arquivos</div>

<?php
print_r($_FILES);

if($_FILES && $_FILES['arquivo']){
    $pastaUP = 'C:\\Users\\eros\\OneDrive\\Área de Trabalho\\';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUP . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];

    if(move_uploaded_file($tmp, $arquivo)){
        echo "<br>Arquivo enviado<br>";
    }else{
        echo "Erro";
    }

}

?>

<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<style>
    input,button{
        font-size: 1.2rem;
    }
</style>