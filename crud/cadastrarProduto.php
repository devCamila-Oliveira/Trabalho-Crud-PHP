<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Cadastro de Pessoas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  </head>
  <body>
 
    <form method="POST" action="./inserts/produto/insert.php">
      <h1>Cadastrar Produto</h1>
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome">
      <label for="peso">Peso:</label>
      <input type="text" id="peso" name="peso">
      <label for="preco">Preço:</label>
      <input type="number" id="preco" name="preco" >
      <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
  </body>
</html>