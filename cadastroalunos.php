<?php
include('verificarlogin.php');
$logado = $_SESSION['Usuario'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>@import url('https://fonts.googleapis.com/css2?family=Catamaran:wght@100&display=swap');</style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <link rel="stylesheet" href="css/cadastrolivros.css">
</head>
<!--cabeçario-->

<body>
    <img src="img/funfoofc.avif" class="imgFundo" alt="">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <h3 class="logo">UPBOOK</h3>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <h3 class="usuario"><img src="img/usuario.png" alt=""
                            style="width: 16px;height: 16px; margin-bottom:6px;">
                        Usuário:
                        <?php
                        echo "$logado"
                            ?>
                    </h3>
                </div>
                <a href="logout.php"><button class="sair" id="sair ">Sair</button></a>
            </div>
        </nav>
    </header>


    <main class="">

        <div class="row">

            <div class="col-md-2 t">
                <div class="h">
                    <img src="img/logob-removebg-preview (2).png" class="logob" alt="">
                    <a href="home.php"> <button type="button" class=" bntPag mx-3">Início <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                <path
                                    d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
                            </svg></button></a>
                    <a href="cadastrolivros.php"><button type="button" class=" bntPag  mx-3">Acervo <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-book-half" viewBox="0 0 16 16">
                                <path
                                    d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                            </svg></button></a>
                    <a href="./paginas/cadastroaluno.html"><button type="button" class=" bntPag mx-3">Alunos <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path
                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                            </svg></button></a>
                    <a href="./paginas/emprestimo.html"><button type="button" class=" bntPag btn-info mx-3"><i
                                class="fi fi-sr-home"></i> Empréstimo <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0z" />
                            </svg></button></a>
                    <a href=""><button type="button" class=" bntPag mx-3">Atríbuidos <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-hourglass-split" viewBox="0 0 16 16">
                                <path
                                    d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
                            </svg></button></a>
                    <a href=""><button type="button" class="bntPag  mx-3">Pendentes <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-clock-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            </svg></button></a>
                    <a href=""><button type="button" class=" bntPag btn-info mx-3">Entregues <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-file-earmark-check-fill" viewBox="0 0 16 16">
                                <path
                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm1.354 4.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                            </svg></button></a>
                </div>
            </div>
            <!--conteudo principal-->
            <div id="principal" class="principal col-md-5 r">



                <div class="modal fade" id="livrosAddModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Adicionar Livros</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Fechar"></button>
                            </div>
                            <!--salvar estudante-->
                            <form id="saveLivros">
                                <div class="modal-body">

                                    <div id="errorMessage" class="alert alert-warning d-none"></div>

                                    <div class="mb-3">
                                        <label for="">Nome Aluno</label>
                                        <input type="text" name="nome" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Ano</label>
                                        <input type="text" name="ano" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="">curso</label>
                                        <input type="text" name="curso" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Ano do Livro</label>
                                        <input type="number" name="turma" placeholder="Ex: 0000"
                                            class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Quantidades de Livro</label>
                                        <input type="number" name="quantidade_livro" placeholder="Ex: 0000"
                                            class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Observação</label>
                                        <input type="text" name="observacao" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Data do Cadastro</label>
                                        <input type="date" name="data_cadastro" class="form-control" />
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn btn-primary">Salvar Livro</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Edit livros Modal -->
                <div class="modal fade" id="livrosEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar Livro </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Fechar"></button>
                            </div>
                            <form id="updateLivros">
                                <div class="modal-body">

                                    <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

                                    <input type="hidden" name="livros_id" id="livros_id">

                                    <div class="mb-3">
                                        <label for="">nome aluno</label>
                                        <input type="text" name="nome" id="nome" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Ano</label>
                                        <input type="text" name="ano" id="ano" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="">curso</label>
                                        <input type="text" name="curso" id="curso" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="">turma</label>
                                        <input type="number" name="turma" id="turma" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Quantidade do Livro</label>
                                        <input type="number" name="quantidade_livro" id="quantidade_livro"
                                            class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Observacao</label>
                                        <input type="text" name="observacao" id="observacao" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Data do Cadastro</label>
                                        <input type="date" name="data_cadastro" id="data_cadastro"
                                            class="form-control" />
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn btn-primary">Editar Livro </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- View livros Modal -->
                <div class="modal fade" id="livrosViewModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Visualizar Livro</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Fechar"></button>
                            </div>
                            <div class="modal-body">

                                <div class="mb-3">
                                    <label for="">Nome aluno</label>
                                    <p id="view_nome" class="form-control"></p>
                                </div>
                                <div class="mb-3">
                                    <label for="">ano</label>
                                    <p id="view_ano" class="form-control"></p>
                                </div>
                                <div class="mb-3">
                                    <label for="">curso</label>
                                    <p id="view_curso" class="form-control"></p>
                                </div>
                                <div class="mb-3">
                                    <label for="">Ano do Livro</label>
                                    <p id="view_turma" class="form-control"></p>
                                </div>
                                <div class="mb-3">
                                    <label for="">Quantidade do Livro</label>
                                    <p id="view_quantidade_livro" class="form-control"></p>
                                </div>
                                <div class="mb-3">
                                    <label for="">Observacao</label>
                                    <p id="view_observacao" class="form-control"></p>
                                </div>
                                <div class="mb-3">
                                    <label for="">Data do Cadastro</label>
                                    <p id="view_data_cadastro" class="form-control"></p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mt-4">
                    <h1 id="sistema">Controle/Cadastro de Alunos</h1>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" style="whidth:100%;">
                                <div class="card-header">

                                    <form action="">
                                        <div class="box-search">
                                            <input name="busca" class="form-control w-25" value="<?php if (isset($_GET['busca']))
                                                echo $_GET['busca']; ?>" placeholder="Digite os termos de pesquisa"
                                                type="text">
                                            <button type="submit" class="btn btn-primary">Pesquisar</button>
                                            <button type="button" class="btn btn-primary float-end"
                                                data-bs-toggle="modal" data-bs-target="#livrosAddModal"
                                                style="margin-left: 68vh;">
                                                Adicionar Livros
                                            </button>
                                        </div>
                                    </form>





                                </div>
                                <div class="card-body">

                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Título</th>
                                                <th>ano</th>
                                                <th>curso</th>
                                                <th>Ano do Livro</th>
                                                <th>Quantidade do Livro</th>
                                                <th>Observacao</th>
                                                <th>Data do Cadastro</th>
                                                <th>Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require 'dbcon.php';





                                            if (!isset($_GET['busca'])) {

                                                require 'dbcon.php';

                                                $query = "SELECT * FROM estudantes";
                                                $query_run = mysqli_query($con, $query);

                                                if (mysqli_num_rows($query_run) > 0) {
                                                    foreach ($query_run as $livros) {
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <?= $livros['id'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $livros['nome'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $livros['ano'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $livros['curso'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $livros['turma'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $livros['quantidade_livro'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $livros['observacao'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $livros['data_cadastro'] ?>
                                                            </td>
                                                            <td>
                                                                <button type="button" value="<?= $livros['id']; ?>"
                                                                    class="viewLivrosBtn btn btn-info btn-sm"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                        fill="white" class="bi bi-arrows-angle-expand"
                                                                        viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd"
                                                                            d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z" />
                                                                    </svg></button>

                                                                <button type="button" value="<?= $livros['id']; ?>"
                                                                    class="editLivrosBtn btn btn-success btn-sm"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                        fill="currentColor" class="bi bi-pencil"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                                    </svg></button>

                                                                <button type="button" value="<?= $livros['id']; ?>"
                                                                    class="deleteLivrosBtn btn btn-danger btn-sm"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                        fill="currentColor" class="bi bi-trash-fill"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                                    </svg></button>

                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                                <?php
                                            } else {
                                                $pesquisa = $con->real_escape_string($_GET['busca']);
                                                $sql_code = "SELECT * FROM estudantes WHERE id LIKE '%$pesquisa%' 
                                                OR nome LIKE '%$pesquisa%' 
                                                OR ano LIKE '%$pesquisa%' OR curso LIKE '%$pesquisa%'";
                                                $sql_query = $con->query($sql_code) or die("ERRO ao consultar! " . $con->$error);

                                                if ($sql_query->num_rows == 0) {
                                                    ?>
                                                    <tr>
                                                        <td colspan="3">Nenhum resultado encontrado...</td>
                                                    </tr>
                                                    <?php
                                                } else {
                                                    while ($livros = $sql_query->fetch_assoc()) {
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <?= $livros['id'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $livros['nome'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $livros['ano'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $livros['curso'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $livros['turma'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $livros['quantidade_livro'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $livros['observacao'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $livros['data_cadastro'] ?>
                                                            </td>
                                                            <td>
                                                                <button type="button" value="<?= $livros['id']; ?>"
                                                                    class="viewLivrosBtn btn btn-info btn-sm"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                        fill="white" class="bi bi-arrows-angle-expand"
                                                                        viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd"
                                                                            d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z" />
                                                                    </svg></button>

                                                                <button type="button" value="<?= $livros['id']; ?>"
                                                                    class="editLivrosBtn btn btn-success btn-sm"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                        fill="currentColor" class="bi bi-pencil"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                                    </svg></button>

                                                                <button type="button" value="<?= $livros['id']; ?>"
                                                                    class="deleteLivrosBtn btn btn-danger btn-sm"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                        fill="currentColor" class="bi bi-trash-fill"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                                    </svg></button>

                                                            </td>
                                                        </tr>


                                                        <?php
                                                    }
                                                }


                                            }

                                            ?>

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php
        if (isset($_POST['submit'])) {


            include_once('config.php');

            $nomeLivro = $_POST['nome'];
            $anoLivro = $_POST['ano'];
            $cursoLivro = $_POST['curso'];
            $anoLivro = $_POST['turma'];
            $observacaoLivro = $_POST['observacao'];
            $dataCadastroLivro = $_POST['data_cadastro'];

            $result = mysqli_query($conexao, "INSERT INTO estudantes (nome,ano,curso,turma,observacao,data_cadastro) VALUES 
      ('$nomeLivro','$anoLivro','$cursoLivro','$anoLivro','$observacaoLivro','$dataCadastroLivro')");
        }

        ?>


    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>
        $(document).on('submit', '#saveLivros', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("save_livros", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if (res.status == 422) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(res.message);

                    } else if (res.status == 200) {

                        $('#errorMessage').addClass('d-none');
                        $('#livrosAddModal').modal('hide');
                        $('#saveLivros')[0].reset();

                        alertify.set('notifier', 'position', 'bottom-right');
                        alertify.success(res.message);

                        $('#myTable').load(location.href + " #myTable");

                    } else if (res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.editLivrosBtn', function () {

            var livros_id = $(this).val();

            $.ajax({
                type: "GET",
                url: "code.php?livros_id=" + livros_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if (res.status == 404) {

                        alert(res.message);
                    } else if (res.status == 200) {

                        $('#livros_id').val(res.data.id);
                        $('#nome').val(res.data.nome);
                        $('#ano').val(res.data.ano);
                        $('#curso').val(res.data.curso);
                        $('#turma').val(res.data.turma);
                        $('#quantidade_livro').val(res.data.quantidade_livro);
                        $('#observacao').val(res.data.observacao);
                        $('#data_cadastro').val(res.data.data_cadastro);

                        $('#livrosEditModal').modal('show');
                    }

                }
            });

        });

        $(document).on('submit', '#updateLivros', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_livros", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if (res.status == 422) {
                        $('#errorMessageUpdate').removeClass('d-none');
                        $('#errorMessageUpdate').text(res.message);

                    } else if (res.status == 200) {

                        $('#errorMessageUpdate').addClass('d-none');

                        alertify.set('notifier', 'position', 'bottom-right');
                        alertify.success(res.message);

                        $('#livrosEditModal').modal('hide');
                        $('#updateLivros')[0].reset();

                        $('#myTable').load(location.href + " #myTable");

                    } else if (res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.viewLivrosBtn', function () {

            var livros_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "code.php?livros_id=" + livros_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if (res.status == 404) {

                        alert(res.message);
                    } else if (res.status == 200) {

                        $('#view_nome').text(res.data.nome);
                        $('#view_ano').text(res.data.ano);
                        $('#view_curso').text(res.data.curso);
                        $('#view_turma').text(res.data.turma);
                        $('#view_quantidade_livro').text(res.data.quantidade_livro);
                        $('#view_observacao').text(res.data.observacao);
                        $('#view_data_cadastro').text(res.data.data_cadastro);

                        $('#livrosViewModal').modal('show');
                    }
                }
            });
        });

        $(document).on('click', '.deleteLivrosBtn', function (e) {
            e.preventDefault();

            if (confirm('Tem Certeza de que Deseja Excluir esses Dados?')) {
                var livros_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'delete_livros': true,
                        'livros_id': livros_id
                    },
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if (res.status == 500) {

                            alert(res.message);
                        } else {
                            alertify.set('notifier', 'position', 'bottom-right');
                            alertify.success(res.message);

                            $('#myTable').load(location.href + " #myTable");
                        }
                    }
                });
            }
        });

    </script>
</body>

</html>