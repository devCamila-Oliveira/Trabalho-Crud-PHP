<?php
    include("../../conexao.php");

    $nome   = $_POST['nome'];
    $peso   = $_POST['peso'];
    $preco  = $_POST['preco'];

    $query = "INSERT INTO produto(nomeProduto, pesoProduto, precoProduto) 
    VALUE  ('$nome', '$peso', '$preco')";
    $busca = mysqli_query($conn, $query);
    header("Location: ../../banco.php");
?>