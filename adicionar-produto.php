<?php include("cabecalho.php"); ?>

<?php

$nome = $_GET["nome"];
$preco = $_GET["preco"];

?>

<div class="container">
        <div class="principal">
        <p>Produto <?= $nome; ?>, <?= $preco; ?> adicionar com sucesso!<p>
        </div>
    </div>


<?php include("rodape.php"); ?>







