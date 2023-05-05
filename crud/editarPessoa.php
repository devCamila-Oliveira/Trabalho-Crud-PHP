<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Editar de Pessoas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  </head>
  <body>
    <?php
      include("conexao.php");
      if (isset($_GET['CPF'])) {
        $cpf = mysqli_real_escape_string($conn, $_GET['CPF']);

        $query = "SELECT * FROM pessoa WHERE CPF = '$cpf'";
        $busca = mysqli_query($conn, $query);

        if (mysqli_num_rows($busca) > 0) {
          $dados = mysqli_fetch_array($busca);
        } else {
          echo "Pessoa não encontrada.";
          exit;
        }
      } else {
        echo "CPF não informado.";
        exit;
      }
    ?>
    <form method="POST" action="./inserts/pessoa/update.php">
      <h1>EDITAR PESSOA</h1>
      <label for="cpf">CPF:</label>
      <input type="text" id="cpf" name="cpf" value="<?php echo htmlspecialchars($dados['CPF']) ?>">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($dados['nomePessoa']) ?>">
      <label for="idade">Idade:</label>
      <input type="number" id="idade" name="idade" value="<?php echo htmlspecialchars($dados['idadePessoa']) ?>">
      <button type="submit" class="btn btn-success">Editar</button>
    </form>
  </body>
</html>