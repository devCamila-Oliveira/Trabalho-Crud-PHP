<?php

require_once '../../conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $peso = $_POST['peso'];
    $preco = $_POST['preco'];

    $query = "UPDATE produto SET nomeProduto= '$nome', pesoProduto = '$peso', precoProduto = '$preco' WHERE IdProduto = '$id'";
    $resultado = mysqli_query($conn, $query);

    if ($resultado) {
        header("Location: ../../banco.php");
        exit();
    } else {

        echo "Erro ao atualizar registro: " . mysqli_error($conn);
    }
} else {
    echo "Erro ao atualizar os dados da pessoa.";
}
?>