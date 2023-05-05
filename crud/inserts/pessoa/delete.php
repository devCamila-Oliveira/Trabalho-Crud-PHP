<?php
    include("../../conexao.php");

    if(isset($_GET['CPF'])){
        $cpf = mysqli_real_escape_string($conn, $_GET['CPF']);

        $query = "DELETE FROM pessoa WHERE cpf = '$cpf'";
        $busca = mysqli_query($conn, $query);

        if($busca){
            header("Location: ../../banco.php");
        } else {
            echo "Erro ao deletar.";
        }
    } else {
        echo "CPF não informado.";
    }
?>