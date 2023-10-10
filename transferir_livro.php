<?php

require 'dbcon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $livro_id = $_POST["livro_id"];

    // Primeiro, insira o livro na tabela 'entregues'
    $query = "INSERT INTO entregues SELECT * FROM emprestimo WHERE id = $livro_id";
    if (mysqli_query($con, $query)) {

        // Se o livro foi inserido com sucesso em 'entregues', delete-o da tabela 'emprestimo'
        $query = "DELETE FROM emprestimo WHERE id = $livro_id";
        if (mysqli_query($con, $query)) {
            echo "Livro transferido com sucesso!";
        } else {
            echo "Erro ao deletar o livro da tabela emprestimo: " . mysqli_error($con);
        }
    } else {
        echo "Erro ao inserir o livro na tabela entregues: " . mysqli_error($con);
    }
}

header('Location: atribuidos.php'); // Volte para a página anterior ou a página que você desejar.
?>