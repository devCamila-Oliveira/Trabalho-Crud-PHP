<?php
require_once '../../conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    $query = "UPDATE pessoa SET nomePessoa = '$nome', idadePessoa = '$idade' WHERE CPF = '$cpf'";
    $resultado = mysqli_query($conn, $query);

    if ($resultado) {
        header("Location: ../../banco.php");
        exit();
    } else {
        echo "Erro ao atualizar registro: " . mysqli_error($conn);
    }
} else {
    echo "Erro ao atualizar os dados.";
}
?>