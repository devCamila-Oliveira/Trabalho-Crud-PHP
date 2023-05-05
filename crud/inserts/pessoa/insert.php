<?php
    include("../../conexao.php");

    $cpf   = $_POST['cpf'];
    $nome  = $_POST['nome'];
    $idade = $_POST['idade'];

    $query = "INSERT INTO pessoa (CPF, nomePessoa, idadePessoa) VALUE  ('$cpf', '$nome', '$idade')";
    $busca = mysqli_query($conn, $query);
    header("Location: ../../banco.php");
?>