<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Trabalho de PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
</head>
<body>
    <table class="table" border="1px" style="text-align: center;">
        <h1>Pessoas</h1>
        <thead class="thead-dark">
          <tr>
            <th scope="col">CPF</th>
            <th scope="col">Nome</th>
            <th scope="col">Idade</th>
            <th scope="col"></th>
            <th scope="col"><a type="button" class="btn btn-success" href="cadastrarPessoa.php">CADASTRAR</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            require('conexao.php');
            $query = "SELECT * FROM pessoa";
            $busca = mysqli_query($conn, $query);

            while ($dados = mysqli_fetch_array($busca)) {
                $id = $dados['CPF'];
            ?>
            <td><?php echo $dados['CPF'] ?> </td>
            <td><?php echo $dados['nomePessoa'] ?></td>
            <td><?php echo $dados['idadePessoa'] ?></td>
            <td><a class="btn btn-warning" href="editarPessoa.php?CPF=<?php echo $dados['CPF']; ?>">EDITAR</a></td>
            <td><a class='btn btn-danger btn-sn' href="./inserts/pessoa/delete.php?CPF=<?php echo $dados['CPF']; ?>" data-confirm='Deseja exluir o item selecionado?'>DELETAR</td>
          </tr>
          <?php } ?>
          <?php
          
          ?>
        </tbody>
      </table>
      <table class="table" border="1px" style="text-align: center;">
        <h1>Produtos</h1>
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Peso</th>
            <th scope="col">Preço</th>
            <th></th>
            <th><a type="button" class="btn btn-success" href="cadastrarProduto.php">CADASTRAR</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            require('conexao.php');

            $query = "SELECT * FROM produto";
            $busca = mysqli_query($conn, $query);

            while ($dados = mysqli_fetch_array($busca)) {
                $id = $dados['IdProduto'];
            ?>
            <td><?php echo $dados['IdProduto'] ?> </td>
            <td><?php echo $dados['nomeProduto'] ?></td>
            <td><?php echo $dados['pesoProduto'] ?></td>
            <td><?php echo $dados['precoProduto'] ?></td>
            <td><a class="btn btn-warning" href="editarProduto.php?IdProduto=<?php echo $dados['IdProduto']; ?>">EDITAR</a></td>
            <td><a class='btn btn-danger btn-sn' href="./inserts/produto/delete.php?IdProduto=<?php echo $dados['IdProduto']; ?>" data-confirm='Deseja excluir o item selecionado?'>DELETAR</td>
          </tr>
          <?php } ?>
        </tbody>
        </tbody>
      </table>
</body>
</html>