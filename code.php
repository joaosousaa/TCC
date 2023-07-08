<?php

require 'dbcon.php';

if(isset($_POST['save_livros']))
{
    $titulo = mysqli_real_escape_string($con, $_POST['titulo']);
    $autor = mysqli_real_escape_string($con, $_POST['autor']);
    $editor = mysqli_real_escape_string($con, $_POST['editor']);
    $ano_livro = mysqli_real_escape_string($con, $_POST['ano_livro']);
    $quantidade_livro = mysqli_real_escape_string($con, $_POST['quantidade_livro']);
    $observacao = mysqli_real_escape_string($con, $_POST['observacao']);
    $data_cadastro = mysqli_real_escape_string($con, $_POST['data_cadastro']);

    if($titulo == NULL || $autor == NULL || $editor == NULL || $ano_livro == NULL || $quantidade_livro == NULL || $observacao == NULL || $data_cadastro == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'Todos os Campos São Obrigatórios'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO cadastrolivros (titulo,autor,editor,ano_livro,quantidade_livro,observacao,data_cadastro) VALUES ('$titulo','$autor','$editor','$ano_livro','$quantidade_livro','$observacao','$data_cadastro')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Livro Adicionado Com Sucesso'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Livro Não Adicionado'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_POST['update_livros']))
{
    $livros_id = mysqli_real_escape_string($con, $_POST['livros_id']);

    $titulo = mysqli_real_escape_string($con, $_POST['titulo']);
    $autor = mysqli_real_escape_string($con, $_POST['autor']);
    $editor = mysqli_real_escape_string($con, $_POST['editor']);
    $ano_livro = mysqli_real_escape_string($con, $_POST['ano_livro']);
    $quantidade_livro = mysqli_real_escape_string($con, $_POST['quantidade_livro']);
    $observacao = mysqli_real_escape_string($con, $_POST['observacao']);
    $data_cadastro = mysqli_real_escape_string($con, $_POST['data_cadastro']);

    if($titulo == NULL || $autor == NULL || $editor == NULL || $ano_livro == NULL || $quantidade_livro == NULL || $observacao == NULL || $data_cadastro == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'Todos os Campos São Obrigatórios'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE cadastrolivros SET titulo='$titulo', autor='$autor', editor='$editor', ano_livro='$ano_livro', quantidade_livro='$quantidade_livro' , observacao='$observacao', data_cadastro='$data_cadastro'
                WHERE id='$livros_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Livro Editado Com Sucesso'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Livro Não Editado'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['livros_id']))
{
    $livros_id = mysqli_real_escape_string($con, $_GET['livros_id']);

    $query = "SELECT * FROM cadastrolivros WHERE id='$livros_id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $livros = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Livro Obtido Com Sucesso Por ID',
            'data' => $livros
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Identificação Do Livro Não Encontrada'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_livros']))
{
    $livros_id = mysqli_real_escape_string($con, $_POST['livros_id']);

    $query = "DELETE FROM cadastrolivros WHERE id='$livros_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Livro Deletado Com Sucesso'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Livro Não Deletado'
        ];
        echo json_encode($res);
        return;
    }
}

?>