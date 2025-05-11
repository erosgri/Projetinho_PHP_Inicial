<div class="titulo">Imagens</div>

<?php  
session_start();
session_destroy();

$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = __DIR__ . '/../files/';
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];

if(move_uploaded_file($tmp, $arquivo)){
    echo "<br> Sucesso!!<br>";
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivos'] = $arquivos;
}else{
    echo "<br> Erro";
}


?>

<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach($arquivos as $arq): ?>
        <?php if(stripos($arquivo, '.JPG' > 0))  ?>
        <li>
            <img src="/erosphp/files/<?= urlencode($arq) ?>" height="75" />

                <?= htmlspecialchars($arq) ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>