<?php
    include("../../conexao.php");

    if(isset($_GET['IdProduto'])){
        $id = mysqli_real_escape_string($conn, $_GET['IdProduto']);

        $query = "DELETE FROM produto WHERE IdProduto = '$id'";
        $busca = mysqli_query($conn, $query);

        if($busca){
            header("Location: ../../banco.php");
        } else {
            echo "Erro ao deletar registro.";
        }
    } else {
        echo "id não informado.";
    }
?>