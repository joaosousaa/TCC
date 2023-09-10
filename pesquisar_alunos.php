<?php

// Incluir conexão com banco de dados
include_once './dbcon.php';

// Receber o nome que será pesquisado no BD
$nome_aluno = filter_input(INPUT_GET, "nome", FILTER_DEFAULT);

// Acessa o IF quando a variável $nome_aluno possui valor
if(!empty($nome_aluno)) {

    //$pesq_aluno = "%" . $nome_aluno . "%";
    /*$query_alunos = "SELECT id, nome 
                FROM alunos 
                WHERE nome LIKE :nome 
                LIMIT 10";*/

    // QUERY para pesquisa no banco de dados por cada palavra individual
    $query_alunos = "SELECT id, nome 
                FROM alunos
                WHERE MATCH(nome) 
                AGAINST (:nome IN NATURAL LANGUAGE MODE) 
                LIMIT 10";

    // Preparar a QUERY
    $result_alunos = $conn->prepare($query_alunos);

    // Substituir o link :nome pelo valor que deve ser pesquisado
    $result_alunos->bindParam(':nome', $nome_aluno);

    // Executar a QUERY
    $result_alunos->execute();

    // Acessa o IF quando encontrar registro no banco de dados
    if(($result_alunos) and ($result_alunos->rowCount() != 0)) {

        // Ler os registros retornado do banco de dados
        while($row_aluno = $result_alunos->fetch(PDO::FETCH_ASSOC)){

            // Criar o array de dados
            $dados[] = [
                "id" => $row_aluno['id'],
                "nome" => $row_aluno['nome']
            ];
        }

        // Retornar os dados retornado do banco de dados
        $retorna = ['status' => true, 'dados' => $dados];
    } else {
        $retorna = ['status' => false, 'msg' => "Erro: Nenhum aluno encontrado!"];
    }
} else {
    $retorna = ['status' => false, 'msg' => "Erro: Nenhum aluno encontrado!"];
}

// Retornar os dados em formato de objeto
echo json_encode($retorna);
