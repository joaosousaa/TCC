<?php

require '../dbcon.php';

// methods => STORE - UPDATE - DELETE - SHOW(SELECT PER ID) - INDEX

if($_POST['method'] == 'INDEX'){
    // $livros_id = mysqli_real_escape_string($con, $_GET['livros_id']);

    $query = "SELECT * FROM alunos";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        // $alunos = mysqli_fetch_array($query_run);
        $alunos = [];

        while ($row = mysqli_fetch_assoc($query_run)) {
            array_push(
                $alunos,
                [
                    "id" => $row["id"],
                    "email" => $row["email"],
                    "nome" => $row["nome"],
                    "ano_turma" => $row["ano_turma"],
                    "curso" => $row["curso"],
                ]
            );
        }


        $res = [
            'status' => 200,
            'message' => 'Todos os alunos',
            'data' => $alunos
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Alubos Não Encontrados'
        ];
        echo json_encode($res);
        return;
    }
}

$res = [
    'status' => 404,
    'message' => 'Metodo nao encontrado'
];
echo json_encode($res);
return;



?>