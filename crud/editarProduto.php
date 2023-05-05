<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Editar Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  </head>
  <body>
  <?php
      include("conexao.php");
      if (isset($_GET['IdProduto'])) {

        $IdProduto = mysqli_real_escape_string($conn, $_GET['IdProduto']);
        $query = "SELECT * FROM produto WHERE IdProduto = '$IdProduto'";
        $busca = mysqli_query($conn, $query);

        if (mysqli_num_rows($busca) > 0) {
          $dados = mysqli_fetch_array($busca);
        } else {
          echo "Produto não encontrado.";
          exit;
        }
      } else {
        echo "ID não informado.";
        exit;
      }
    ?>
    <form method="POST" action="./inserts/produto/update.php">
      <h1>EDITAR PRODUTO</h1>
      <label for="id">Id:</label>
      <input type="text" id="id" name="id" value="<?php echo htmlspecialchars($dados['IdProduto']) ?>">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($dados['nomeProduto']) ?>">
      <label for="peso">peso:</label>
      <input type="number" id="peso" name="peso" value="<?php echo htmlspecialchars($dados['pesoProduto']) ?>">
      <label for="preco">preco:</label>
      <input type="number" id="preco" name="preco" value="<?php echo htmlspecialchars($dados['precoProduto']) ?>">
      <button type="submit" class="btn btn-success">Editar</button>
    </form>
  </body>
</html>