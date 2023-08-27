<?php

require '../dbcon.php';

// methods => STORE - UPDATE - DELETE - SHOW(SELECT PER ID) - INDEX

if($_POST['method'] == 'INDEX'){
    // $livros_id = mysqli_real_escape_string($con, $_GET['livros_id']);

    $query = "SELECT * FROM cadastrolivros";
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
                    "titulo" => $row["titulo"],
                    "autor" => $row["autor"],
                ]
            );
        }


        $res = [
            'status' => 200,
            'message' => 'Todos os livros',
            'data' => $alunos
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Livros Não Encontrados'
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