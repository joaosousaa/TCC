<?php

include_once "dbcon.php";

$nome_aluno = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_STRING);

if (!empty($nome_aluno)) {

    $pesq_alunos = "%" . $nome_aluno . "%";

    $query_alunos = "SELECT id, nome, ano_turma, curso, email FROM alunos WHERE nome LIKE :nome LIMIT 20";
    $result_alunos = $conn->prepare($query_alunos);
    $result_alunos->bindParam(':nome', $pesq_alunos);
    $result_alunos->execute();

    if (($result_alunos) and ($result_alunos->rowCount() != 0)) {
        while ($row_aluno = $result_alunos->fetch(PDO::FETCH_ASSOC)) {
            $dados[] = [
                'id' => $row_aluno['id'],
                'nome' => $row_aluno['nome'],
                'ano_turma' => $row_aluno['ano_turma'],
                'curso' => $row_aluno['curso'],
                'email' => $row_aluno['email']
            ];
        }

        $retorna = ['erro' => false, 'dados' => $dados];
        //$retorna = ['erro' => true, 'msg' => "Erro: Nenhum usuário encontrado!"];
    } else {
        $retorna = ['erro' => true, 'msg' => "Erro: Nenhum usuário encontrado!"];
    }

} else {
    $retorna = ['erro' => true, 'msg' => "Erro: Nenhum usuário encontrado!"];
}

echo json_encode($retorna);