<?php

include_once "dbcon.php";

$titulo_livro = filter_input(INPUT_GET, "titulo", FILTER_SANITIZE_STRING);

if (!empty($titulo_livro)) {

    $pesq_livros = "%" . $titulo_livro . "%";

    $query_livros = "SELECT id, titulo, quantidade_livro FROM livros WHERE titulo LIKE :titulo LIMIT 20";
    $result_livros = $conn->prepare($query_livros);
    $result_livros->bindParam(':titulo', $pesq_livros);
    $result_livros->execute();

    if (($result_livros) and ($result_livros->rowCount() != 0)) {
        while ($row_livro = $result_livros->fetch(PDO::FETCH_ASSOC)) {
            $Dados[] = [
                'id' => $row_livro['id'],
                'titulo' => $row_livro['titulo'],
                'quantidade_livro' => $row_livro['quantidade_livro'],
            ];
        }

        $retorna = ['erro' => false, 'Dados' => $Dados];
        //$retorna = ['erro' => true, 'msg' => "Erro: Nenhum usuário encontrado!"];
    } else {
        $retorna = ['erro' => true, 'msg' => "Erro: Nenhum usuário encontrado!"];
    }

} else {
    $retorna = ['erro' => true, 'msg' => "Erro: Nenhum usuário encontrado!"];
}

echo json_encode($retorna);