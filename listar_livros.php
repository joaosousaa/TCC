<?php

// Incluir conexão com banco de dados
include_once './dbcon.php';

// Receber o titulo que será pesquisado no BD
$titulo_livro = filter_input(INPUT_GET, "titulo", FILTER_DEFAULT);

// Acessa o IF quando a variável $titulo_livro possui valor
if(!empty($titulo_livro)) {

    //$pesq_livro = "%" . $titulo_livro . "%";
    /*$query_livros = "SELECT id, titulo 
                FROM livros 
                WHERE titulo LIKE :titulo 
                LIMIT 10";*/

    // QUERY para pesquisa no banco de dados por cada palavra individual
    $query_livros = "SELECT id, titulo 
                FROM livros 
                WHERE MATCH(titulo) 
                AGAINST (:titulo IN NATURAL LANGUAGE MODE) 
                LIMIT 10";

    // Preparar a QUERY
    $result_livros = $conn->prepare($query_livros);

    // Substituir o link :titulo pelo valor que deve ser pesquisado
    $result_livros->bindParam(':titulo', $titulo_livro);

    // Executar a QUERY
    $result_livros->execute();

    // Acessa o IF quando encontrar registro no banco de dados
    if(($result_livros) and ($result_livros->rowCount() != 0)) {

        // Ler os registros retornado do banco de dados
        while($row_livro = $result_livros->fetch(PDO::FETCH_ASSOC)){

            // Criar o array de dados
            $dados[] = [
                "id" => $row_livro['id'],
                "titulo" => $row_livro['titulo']
            ];
        }

        // Retornar os dados retornado do banco de dados
        $retorna = ['status' => true, 'dados' => $dados];
    } else {
        $retorna = ['status' => false, 'msg' => "Erro: Nenhum livro encontrado!"];
    }
} else {
    $retorna = ['status' => false, 'msg' => "Erro: Nenhum livro encontrado!"];
}

// Retornar os dados em formato de objeto
echo json_encode($retorna);
