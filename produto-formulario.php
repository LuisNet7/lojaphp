<?php include("cabecalho.php"); ?>

<div class="container">
  <form action="adicionar-produto.php">
    <div class="form-group">
      <label >Produto</label>
      <input type="text" name="nome" class="form-control" placeholder="nome do produto">
    </div>
    <div class="form-group">
      <label>Preco</label>
      <input type="number" name="preco" class="form-control" placeholder="preco">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>


<?php include("rodape.php"); ?>