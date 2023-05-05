<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Cadastrar Pessoas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  </head>
  <body>
 
    <form method="POST" action="./inserts/pessoa/insert.php">
      <h1>CADASTRAR PESSOA</h1>
      <label for="cpf">CPF:</label>
      <input type="text" id="cpf" name="cpf">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome">
      <label for="idade">Idade:</label>
      <input type="number" id="idade" name="idade" >
      <button type="submit" class="btn btn-success">Editar</button>
    </form>
  </body>
</html>